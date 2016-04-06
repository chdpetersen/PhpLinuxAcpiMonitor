<?php
//$valoracpi = system('acpi', $acpi);
//$command = 'baterymon';


class energyMonitor{
	
	public function battery(){
		
		$command = 'acpi -b';
		$command =  escapeshellcmd($command);

		system($command);		
		
		
		}
		
	public function acAdapter(){
		
		$command = 'acpi -a';
		$command =  escapeshellcmd($command);

		system($command);		
		
		
		}	
	
	public function thermal(){
		
		$command = 'acpi -t';
		$command =  escapeshellcmd($command);

		system($command);		
		
		
		}			
		
	public function cooling(){
		
		$command = 'acpi -c';
		$command =  escapeshellcmd($command);

		system($command);		
		
		
		}
	
	public function details(){
		
		$command = 'acpi -i';
		$command =  escapeshellcmd($command);

		system($command);		
		
		
		}				
	
	
	}
	


?>