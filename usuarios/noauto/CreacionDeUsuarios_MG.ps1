# Se va a repetir el bucle por cada valor que nosotros le demos a raíz, en este caso dos distintos
foreach ($RAIZ IN "", "") {
    # Verifica si el grupo ya existe
    if (-not (Get-ADGroup -Filter {Name -eq $RAIZ})) {
        # Si no existe, crea un nuevo grupo
        New-ADGroup -Name $RAIZ -GroupCategory Security -GroupScope Global -path "OU=$RAIZ,OU=,DC=,DC="
    }

    # Z va a ser sustituido por el número de usuario que queramos, si queremos 20 sustituiremos Z por 20
    for ($I=1; $I -le Z; $I++) {
        # Concatena el nombre de usuario con la raíz + el número que le toque
        $USUARIO = "$RAIZ$I"

        # Convierte la contraseña en un objeto seguro
        $contrasenaCifrada = ConvertTo-SecureString -AsPlainText $USUARIO -Force

        # Crea un nuevo usuario en Active Directory
        New-ADUser -name "$USUARIO" -path "OU=$RAIZ,OU=,DC=,DC=" -accountPassword $contrasenaCifrada -Enabled $True

        # Agrega al usuario al grupo especificado
        Add-ADGroupMember -Identity "$RAIZ" -Members "$USUARIO"

        # Obtiene el ID del grupo
        $GrupoID = Get-ADGroup -Identity "$RAIZ" -Properties @("primaryGroupToken")

        # Establece el ID del grupo principal para el usuario
        Set-ADUser -Identity "$USUARIO" -Replace @{primarygroupID=$GrupoID.primaryGroupToken}

        # Elimina al usuario del grupo "Domain Users"
        Remove-ADGroupMember -Identity "Domain Users" -Members "$USUARIO" -Confirm:$false
    }
}
