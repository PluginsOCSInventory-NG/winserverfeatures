$features =  Get-WindowsFeature | Where Installed | select * 

foreach ($feature in $features){
	$xml += "<WINSERVERFEATURES>`n"
	$xml += "<NAME>"+$feature.Name+"</NAME>`n"
	$xml += "<DISPLAYNAME>"+$feature.DisplayName+"</DISPLAYNAME>`n"
	$xml += "<DESCRIPTION>"+$feature.Description+"</DESCRIPTION>`n"
	$xml += "<INSTALLED>"+$feature.Installed+"</INSTALLED>`n"
	$xml += "<SUBFEATURES>"+$feature.SubFeatures+"</SUBFEATURES>`n"
	$xml += "</WINSERVERFEATURES>`n"
}

echo $xml