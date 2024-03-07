$Path = ""
$Acl = Get-Acl $Path

# Agregar permiso para un usuario, habrá que sustituir "" por el nombre de usuario
$Ar = New-Object System.Security.AccessControl.FileSystemAccessRule("", "FullControl", "Allow")
$Acl.SetAccessRule($Ar)
Set-Acl $Path $Acl


# Define la variable $Path y establece la ruta del directorio o archivo para el que deseas modificar los permisos
#$Path = "C:\Ruta\Al\Directorio"

# Obtiene el ACL actual para el directorio o archivo
#$Acl = Get-Acl $Path

# Crea un nuevo objeto FileSystemAccessRule para especificar los permisos que se otorgarán
# En este caso, se otorga "Control total" al usuario (se debe reemplazar "" con el nombre real del usuario)
#$Ar = New-Object System.Security.AccessControl.FileSystemAccessRule("", "FullControl", "Allow")

# Agrega la regla de acceso al objeto de control de acceso (ACL)
#$Acl.SetAccessRule($Ar)

# Aplica el nuevo conjunto de reglas de acceso al directorio o archivo
#Set-Acl $Path $Acl
