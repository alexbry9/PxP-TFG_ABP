# Pedimos los datos del usuario
$nombreUsuario = Read-Host "Introduce el nombre de usuario"
$contra = Read-Host "Introduce la contraseña" -AsSecureString
$nombreCompleto = Read-Host "Introduce el nombre completo"
$departamento = Read-Host "Introduce el departamento"
$correo = Read-Host "Introduce el correo electrónico"

# Creamos el nuevo usuario
New-ADUser `
    -Name $nombreUsuario `
    -AccountPassword $contra `
    -Enabled $true `
    -DisplayName $nombreCompleto `
    -Department $departamento `
    -EmailAddress $correo `
    -Path "OU=Usuarios,DC=ejemplo,DC=com"