# Crea un nuevo usuario en Active Directory
New-ADUser `
    -Name "NombreDelUsuario" `
    -AccountPassword (ConvertTo-SecureString "ContraseñaDelUsuario" -AsPlainText -Force) `
    -Enabled $true `
    -DisplayName "NombreCompletoDelUsuario" `
    -Path "OU=Ruta,DC=Dominio,DC=com"

#New-ADUser:
#Este cmdlet se utiliza para crear un nuevo usuario en Active Directory.

#-Name "NombreDelUsuario":
#Especifica el nombre del nuevo usuario. Reemplaza "NombreDelUsuario" con el nombre real que deseas asignar al usuario.

#-AccountPassword (ConvertTo-SecureString "ContraseñaDelUsuario" -AsPlainText -Force):
#Especifica la contraseña del nuevo usuario. Reemplaza "ContraseñaDelUsuario" con la contraseña real que deseas asignar al usuario. La contraseña se convierte en un objeto seguro utilizando ConvertTo-SecureString.

#-Enabled $true:
#Habilita la cuenta de usuario estableciendo el parámetro -Enabled como $true.

#-DisplayName "NombreCompletoDelUsuario":
#Especifica el nombre completo o el nombre para mostrar del usuario. Reemplaza "NombreCompletoDelUsuario" con el nombre real que deseas asignar al usuario.

#-Path "OU=Ruta,DC=Dominio,DC=com":
#Especifica la ubicación de la Organizational Unit (OU) en la que se creará el nuevo usuario en el árbol de Active Directory. Reemplaza "OU=Ruta,DC=Dominio,DC=com" con la ubicación real donde deseas crear el usuario. Asegúrate de proporcionar una ruta completa que incluya la información de la OU y el dominio.