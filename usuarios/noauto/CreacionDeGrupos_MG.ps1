#Script original
# Crea un nuevo grupo en Active Directory
New-ADGroup -name "NombreDelGrupo" -GroupCategory Security -GroupScope Global -path "OU=Ubicacion,DC=Dominio,DC=com"



#New-ADGroup:
#Este cmdlet se utiliza para crear un nuevo grupo en Active Directory.

#-name "NombreDelGrupo":
#Especifica el nombre del nuevo grupo. Reemplaza "NombreDelGrupo" con el nombre real que deseas asignar al grupo.

#-GroupCategory Security:
#Establece la categoría del grupo como "Security". Los grupos de seguridad se utilizan para administrar el acceso a recursos en Active Directory.

#-GroupScope Global:
#Establece el ámbito del grupo como "Global". Los grupos globales son utilizados para organizar y gestionar usuarios en el mismo dominio.

#-path "OU=Ubicacion,DC=Dominio,DC=com":
#Especifica la ubicación del nuevo grupo en el árbol de Active Directory. Reemplaza "OU=Ubicacion,DC=Dominio,DC=com" con la ubicación real donde deseas crear el grupo. La Organizational Unit (OU) y el dominio (DC) deben ser reemplazados con valores específicos.