<?php

	/* NEW PAGE
		- shows new content
	*/
	// New Page
	function createBioNewContent()
	{
		return "
					<h1>What Would You Like To Create?</h1>
					<a href='index.php?page=Bio-New-Organism'>Organism</a><br/>
					<a href='index.php?page=Bio-New-Tank'>Tank</a><br/>
					<a href='index.php?page=Bio-New-Plate'>Plate</a><br/>
					<a href='index.php?page=Bio-New-Bacteria'>Bacteria</a><br/>
					<a href='index.php?page=Bio-New-Colony'>Colony</a><br/>
					<a href='index.php?page=Bio-New-Sequence'>Sequence</a><br/>
				"
				;
	}
	// New Org Page
	function createBioNewOrgContent()
	{
		$page = "Bio-New";
		$organismForm = createOrganismForm();
		$tankOverlay= divOverlay(createTankForm(), "okayHandler");		
		
		$html = "
					<h1>New Organism</h1>
					$tankOverlay
					<form name='organismform' action='index.php?page=Bio-New' method='get'>
					$organismForm
					<input type='submit' value='Ok'>
					</form>
					<p style='float:left'><a href='#' onclick='visibilityHandler()'>New Tank</a></p>
				"
				;
		return $html;
	}
	
	// New Tank Page
	function createBioNewTankContent()
	{
		$tankForm = createTankForm();
		$html = "
					<h1>New Tank</h1>
					<form name='tankform' action='index.php' method='get'>
					$tankForm
					<input type='hidden' id='page' name='page' value='Bio-New'>
					<input type='hidden' id='formType' name='formType' value='New-Tank'>
					<input type='submit' value='Ok'>
					
					</form>
				"
				;
		return $html;
	}
	
	// New Plate Page
	function createBioNewPlateContent()
	{
		$plateForm = createPlateForm();
		$html = "
					<h1>New Plate</h1>
					<form name='plateform' action='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New' method='post'>
					$plateForm
					<input type='submit' value='Ok'>
					</form>
				";
		return $html;
				
	}
	// New Bacteria Page
	function createBioNewBacteriaContent()
	{
		$bacteriaForm = createBacteriaForm();
		$html = "
					<h1>New Bacteria</h1>
					<form name='bacteriaform' action='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New' method='post'>
					$bacteriaForm
					<input type='submit' value='Ok'>
					</form>
				";
		return $html;
	}
	// New Colony Page
	function createBioNewColonyContent()
	{
		$colonyForm = createColonyForm();
		$html = "
					<h1>New Colony</h1>
					<form name='colonyform' action='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New' method='post'>
					$colonyForm
					<input type='submit' value='Ok'>
					</form>
				";
		return $html;
	}
	// New Sequence Page
	function createBioNewSequenceContent()
	{
		$sequenceForm = createSequenceForm();
		$html = "
					<h1>New Sequence</h1>
					<form name='sequenceform' action='http://enterprise.cs.mcla.edu/kkeefner/BioProject/index.php?page=Bio-New' method='post'>
					$sequenceForm
					<input type='submit' value='Ok'>
					</form>
				";
		return $html;
	}
	
?>