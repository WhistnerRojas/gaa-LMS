<?php
session_start();
if(isset($_SESSION['email'])){
$email=$_SESSION['email'];
}
else{
	echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Golden Achievers Academy</title>
<link href="../images/icon.ico" id="ico" rel="icon" rev="ico" />
<link rel="stylesheet" type="text/css" href="../style.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="../slide.css" media="screen"/>
</head>
<body>
<div id="container">
	
    <div id="head">
		
		<h1><a href="index.php" title="">Golden Achievers Academy</a></h1>
		
		<ul id="menu">
        	<li><a href="index.php" title="Home">Home</a></li>
			<li><a href="aboutus.php" title="About us">About Us</a></li>
        	<li><a href="features.php" title="Features">Features</a></li> 
        	<li><a href="admission.php" title="Admission">Admission</a></li> 
        	<li><a href="regulation.php" title="Regulations">Regulations</a></li>
			<li><a href="contact.php" title="Contact">Contact</a></li>
            <?php
			if(isset($_SESSION['email'])){
				echo "<li><a class='current' href='../lesson/index.php'>Topics</a>";
			}
			?>
		</ul>
        
        <div class="top_head_banner">

        </div>
		
	</div>
    
    
    <div id="area">
		
	</div>
    
    
    <div id="main">
	
		<div id="welcome">
			
			
				<h1>Education with the guidance of God</h1>
			
		</div>
		
		<div id="content_left">
        <form action="../search.php " method="get">
        <input type="text" name="search" title="search" />&nbsp;&nbsp;&nbsp;<input type="image" src="../images/search.png" name="s" title="GO" value="s"/>
        </form></br>
        <h3><?php
                if(isset($_GET['pioneers'])){
				
					echo "Biology Pioneers";
				
				}
				else if(isset($_GET['famous'])){
					$famous=$_GET['famous'];
					if($famous=='foreign'){
					echo "Famous Foreign Biologist";
					}
					else if($famous=='foreign2'){
						
					echo "Famous Foreign Biologist";
						
					}
					else if($famous=='local'){
					echo "Famous Local Biologist";	
					}
					else if($famous=='local2'){
						echo "Famous Local Biologist";
					}
				}
					elseif(isset($_GET['history'])){
						echo "History of Biology";
					}
					elseif(isset($_GET['thescienceoflife'])){
						echo "Biology: the science of life";
					}
					elseif(isset($_GET['characteristics'])){
						echo "Characteristics of Living Things";	
					}
					elseif(isset($_GET['branches'])){
						echo "Branches of Biology";
					}
					elseif(isset($_GET['photosynthesis'])){
						echo "Photosynthesis(Cell Processes)";
					}
					elseif(isset($_GET['photosynthesisII'])){
						echo "Photosynthesis(Cell Processes)";
					}
					elseif(isset($_GET['classification'])){
						echo "Classification of Tissue";
					}
					elseif(isset($_GET['celltheory'])){
						echo "Cell Theory";
					}
					elseif(isset($_GET['atom-and-molecule'])){
						echo "Atoms and Molecules";
					}
					elseif(isset($_GET['classificationII'])){
						echo "Classification of Tissue";
					}
					elseif(isset($_GET['is'])){
						echo "Integumentary System";
					}
					elseif(isset($_GET['ss'])){
						echo "Skeletal System";
					}
					elseif(isset($_GET['ms'])){
						echo "Muscular System";
					}
					elseif(isset($_GET['ds'])){
						echo "Digestive System";
					}
					elseif(isset($_GET['inorganic'])){
						echo "Water, an Inorganic Compound";
					}
					elseif(isset($_GET['organic'])){
						echo "Organic Compound";
					}
					elseif(isset($_GET['humanrep'])){
						echo "Human Reproductive System";
					}
					else{
						echo "BIOLOGY";
					}
                ?></h3>
        
		<?php
                    if(isset($_GET['famous'])){
						$famous=$_GET['famous'];
						if($famous=='foreign'){
							echo "<h4>Charles Darwin (1809-1882)<i> England</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Evolutionist famous for his theory 'survival of the fittest'.</p>";
							echo "<h4>Gregor Mendel (1822-1884) <i> Czech Republic</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genetics, Botanist who discovered 'inherited traits' by cross-breeding pea plants.</p>";
							echo "<h4>Louis Pasteur (1822-1895) <i> France</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Microbiologist who created 'pasteurization' (a process that kills microbes via heat).</p>";
							echo "<h4>Roger W. Sperry (1913-1994)<i> America</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;neuropsychologist, winner of the 1981 Nobel Prize in Physiology or Medicine for his research on the split-brain.</p>";
							echo "<h4>Robert Hooke (1635-1703) <i> England</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cytologist who research cells and actually coined the term 'cell.' He also invented the reflecting microscope.</p>";
							echo "<h4>Anton van Leeuwenhoek (1632-1723) <i> Holland</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cytologist who invented various single lens microscopes and discovered various microbes (protists).</p>";
							echo "<h4>Carolus Linnaeus (1707-1778) <i> Sweden</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father of taxonomy.</p>";
							echo "<h4>Jane Goodall (1934) <i> England</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ethologist who studied Chimp behavior- lead authority in primatology.</p>";
							echo "<h4>John James Audobon (1785-1851) <i> Santo Domingo</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ornithologist and inspiration of the Audobon Society- An organization whose goals is the research and protection of bird species.</p>";
							echo "<p align='right'><a href='index.php?famous=local'>see Local Biologist</a> || <a href='index.php?famous=foreign2'>Next</a></p>";		
						}
						else if($famous=='foreign2'){
							
							echo "<h4>Herman August Hagen (1817-1893) <i> Germany</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entomologist who worked with neurotera and odonata (Dragonflies).</p>";
							echo "<h4>Santiago Ramón y Cajal (1852-1934) <i> Spain</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the 'Father' of neuroscience.</p>";
							echo "<h4>Austin Roberts (1883-1948) <i> South Africa</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zoologist and Ornitho logist.</p>";
							echo "<h4>George Sars (1837-1927) <i> Norway</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marine Biologist and a pioneer for fisheries science who researched cod populations.</p>";
							echo "<h4>Floyd Zaiger (1926) <i> America</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fruit geneticist who created hybrids such as the 'pluot and aprium'.</p>";
							echo "<h4>Mriganka Sur (1953-present) <i> India</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Congnitive Neuroscientist who researched neroplasticity.</p>";
							echo "<h4>Henry Suter (1841-1918) <i> New Zealand</i></h4></br>";
							echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zoologist, Naturalist, Palaeontologist and Malacologist.</p>";
							echo "<p align='right'><a href='index.php?famous=local'>Next</a></p>";
							
							
						}
						else if($famous=='local'){
							
							echo "Whistner Rojas";
							
							
							
							echo "<p align='right'><a href='index.php?famous=foreign'>see foreign biologist</a> || <a href='index.php?famous=local2'>Next</a></p>";
							
						}
						else if($famous=='local2'){
						echo "famous ako!!!!";
						
					}
					}
					else if(isset($_GET['pioneers'])){
						
						echo "<h3>Early Pioneers of Biological Science</h3>";
						echo "<p align=justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Biological Science is the study of living things. Who were some of the major names in early Biological Science? One of the people involved in early Biological Science was a man named Robert Hooke. What exactly did Robert Hooke Do? He was an English scientist alive in the 1660s. He studied the oak under a microscope at his time. During the 1660s the ability to magnify objects was 30xs the strength, as oposed to today where we can magnify objects on a much smaller level and get more detail. As Robert Hooke looked through the microscope, he discovered what are known cells.</p>";
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Another of the people associated with early biology is a man named Anton van Leeuwenhoek. After reading about Robert Hooke's results with the 30x power microscope, Van Leeuwenhoek Decided to get in on the action as well. Anton van Leeuwenhoek developed a higher microscope that could study things at 300x power. The higher power microscope enabled van Leeunwenhoek to study pond water. Van Leeuweenhoek was one of the pioneers to study single celled organisms.</p>";
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Who were the others who were associated with early biology? The other two men was Marcello Malphigi and Lorenzo Oken were also associated with biology in the early days. Marcello Malphigi studied biology in the 1670s. Malhpigi's theory said that the plant structures like leaves are composed of cells as well.</p>";
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-A forth man who is instrumental in the study of early biology was Lorenzo Oken. Lorenzo Oken studied biology in the early 1800s around 1805. Then in the late 1830s two other early biologists backed up Oken's findings. Oken stated that any living oraganism is made up of cells. More early biologists in the 1800s were Matthias Schleiden and Theodor Schwann. Both Schlieden and Schwann agreed with Oken's Findings. Schlieden and Schwann observed differentplants to come up with this conclusion. Other scientists living at this time came to the same conclusion after numerous observations were made.</p>";
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This leads to the next question: How many organisms are made of cells?<br/>-Both small and large organisms are composed of cells. This size of cells ranges from a tiny bacteria to a whale in the ocean. The bacteria are tin y and composed of cells. According to the early scientists Oken, Schleiden, and Schwann, that is what organisms are made of. As of today this theory holds true.</p>";
					}
					elseif(isset($_GET['history'])){
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The history of biology traces the study of the living world from ancient to modern times. Although the concept of biology as a single coherent field arose in the 19th century, the biological sciences emerged from traditions of medicine and natural history reaching back to ayurveda, ancient Egyptian medicine and the works of Aristotle and Galen in the ancient Greco-Roman world. This ancient work was further developed in the Middle Ages by Muslim physicians and scholars such as Avicenna. During the European Renaissance and early modern period, biological thought was revolutionized in Europe by a renewed interest in empiricism and the discovery of many novel organisms. Prominent in this movement were Vesalius and Harvey, who used experimentation and careful observation in physiology, and naturalists such as Linnaeus and Buffon who began to classify the diversity of life and the fossil record, as well as the development and behavior of organisms. Microscopy revealed the previously unknown world of microorganisms, laying the groundwork for cell theory. The growing importance of natural theology, partly a response to the rise of mechanical philosophy, encouraged the growth of natural history (although it entrenched the argument from design).</p>";
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Over the 18th and 19th centuries, biological sciences such as botany and zoology became increasingly professional scientific disciplines. Lavoisier and other physical scientists began to connect the animate and inanimate worlds through physics and chemistry. Explorer-naturalists such as Alexander von Humboldt investigated the interaction between organisms and their environment, and the ways this relationship depends on geography—laying the foundations for biogeography, ecology and ethology. Naturalists began to reject essentialism and consider the importance of extinction and the mutability of species. Cell theory provided a new perspective on the fundamental basis of life. These developments, as well as the results from embryology and paleontology, were synthesized in Charles Darwin's theory of evolution by natural selection. The end of the 19th century saw the fall of spontaneous generation and the rise of the germ theory of disease, though the mechanism of inheritance remained a mystery.</p>";
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the early 20th century, the rediscovery of Mendel's work led to the rapid development of genetics by Thomas Hunt Morgan and his students, and by the 1930s the combination of population genetics and natural selection in the "."neo-Darwinian synthesis".". New disciplines developed rapidly, especially after Watson and Crick proposed the structure of DNA. Following the establishment of the Central Dogma and the cracking of the genetic code, biology was largely split between organismal biology—the fields that deal with whole organisms and groups of organisms—and the fields related to cellular and molecular biology. By the late 20th century, new fields like genomics and proteomics were reversing this trend, with organismal biologists using molecular techniques, and molecular and cell biologists investigating the interplay between genes and the environment, as well as the genetics of natural populations of organisms.</p>";
						echo "<img src='images/history.JPG'</br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The word biology is formed by combining the Greek βίος (bios), meaning "life", and the suffix "-logy", meaning "science of", "knowledge of", "study of", based on the Greek verb λέγειν, "legein" "to select", "to gather" (cf. the noun λόγος, "logos""word"). The term biology in its modern sense appears to have been introduced independently by Karl Friedrich Burdach (in 1800), Gottfried Reinhold Treviranus (Biologie odder Philosophies deer livened Nature, 1802) and Jean-Baptiste Lamarck (Hydrogéologie, 1802). The word itself appears in the title of Volume 3 of Michael Christoph Hanov'."s".' Philosophiae naturalis sive physical dogmatic: Geologic, biologia, phytologia generalis et dendrologia, published in 1766.</p>';
						
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Before biology, there were several terms used for the study of animals and plants. Natural history referred to the descriptive aspects of biology, though it also included mineralogy and other non-biological fields; from the Middle Ages through the Renaissance, the unifying framework of natural history was the scale nature or Being. Natural and natural theology encompassed the conceptual and metaphysical basis of plant and animal life, dealing with problems of why organisms exist and behave the way they do, though these subjects also included what is now geology, physics, chemistry, and astronomy. Physiology and (botanical) pharmacology were the province of medicine. Botany, zoology, and (in the case of fossils) geology replaced natural history and natural philosophy in the 18th and 19th centuries </p>";
					}
					elseif(isset($_GET['thescienceoflife'])){
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Biology is a natural science concerned with the study of life and living organisms, including their structure, function, growth, origin, evolution, distribution, and taxonomy. Biology is a vast subject containing many subdivisions, topics, and disciplines. Among the most important topics are five unifying principles that can be said to be the fundamental axioms of modern biology:</p>";
						echo "<p><ol>";
						echo "<li>New species and inherited traits are the product of evolutionCells are the basic unit of life</li>";
						echo "<li>Genes are the basic unit of heredity</li>";
						echo "<li>An organism regulates its internal environment to maintain a stable and constant condition</li>";
						echo "<li>Living organisms consume and transform energy.</li>";
						echo "</ol></p>";
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sub disciplines of biology are recognized on the basis of the scale at which organisms are studied and the methods used to study them: biochemistry examines the rudimentary chemistry of life; molecular biology studies the complex interactions of systems of biological molecules; cellular biology examines the basic building block of all life, the cell; physiology examines the physical and chemical functions of the tissues, organs, and organ systems of an organism; and ecology examines how various organisms interact and associate with their environment</p>";
						echo "<img src='images/animal.JPG' height='400px' width='400px'>";
					}
					elseif(isset($_GET['characteristics'])){
						echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="320" height="240" id="FLVPlayer">
  <param name="movie" value="FLVPlayer_Progressive.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="scale" value="noscale" />
  <param name="salign" value="lt" />
  <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/journey_of_sperm&amp;autoPlay=false&amp;autoRewind=false" />
  <param name="swfversion" value="8,0,0,0" />
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="320" height="240">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="scale" value="noscale" />
    <param name="salign" value="lt" />
    <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/journey_of_sperm&amp;autoPlay=false&amp;autoRewind=false" />
    <param name="swfversion" value="8,0,0,0" />
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
</script>';
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;The following is a typical introduction to a first-level course in Human Biology or Human Anatomy and Physiology.</p>";
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;Biology is the study of living beings - including both plants and animals.</br>Many courses in biology and related subjects start by defining living things by listing the".'"Characteristics of Life"'." and examples of each of these characteristics for plants, animals, humans, or whatever categories apply to the main subject and level of the course.</p>";
						echo "<h3>Characteristics of Life:</h3>";
						echo "<center>Comments in Case of Humans</center>";
						echo "<b>Eating</b> &nbsp;&nbsp;<img name='Charactiristics' src='images/cch.JPG' width='400' height='400' alt='' style='background-color: #996600' /></br>";
						echo "<p align='justify'><b>Movement</b> -&nbsp;&nbsp;&nbsp;Examples include movement of limbs, facial tissues, materials through the digestive system, 
and so on.</p>";
						echo "<p align='justify'><b>Reproduction -</b>&nbsp;&nbsp;&nbsp;This is the means by which the species as a whole continues beyond the life-span of any single individual. The human reproduction process involves the exchange of genetic information and material.</p>";
						echo "<p align='justify'><b>Breathing -</b>&nbsp;&nbsp;&nbsp;Breathing involves the intake of air from outside the body, absorption of oxygen gas (O2) for use within the body, and the release of the waste product carbon dioxide gas (CO2) from the body.The action of breathing is described on the pages about the respiratory system.</p>";
						echo "<p align='justify'><b>Growing -</b>&nbsp;&nbsp;&nbsp;The term". '"growing"'." refers to the increase in size of a person during his/her childhood, typically until the age of about 18 years. It can be affected by a lifestyle factors - such as a well-balanced diet, by genetic factors - e.g. coming from a relatively ".'"short" or "tall"'." family, and also by certain hormonal conditions that affect growth/development.</p>";
						echo "<p align='justify'><b>Waste (excretion) -</b>&nbsp;&nbsp;&nbsp;This term refers to removal from the body of waste products that may have been formed by metabolic processes. Examples include:
<li>&nbsp;&nbsp;&nbsp;Breathing out (of the body) carbon dioxide (C2O) and water (H2O), 
the waste products from aerobic respiration.</li>
<li>&nbsp;&nbsp;&nbsp;Sweating, removal of waste products from the body via the skin.</li>
<li>&nbsp;&nbsp;&nbsp;Urinating. (Urea is nitrogenous waste, i.e. it is from proteins.)</li>
<li>&nbsp;&nbsp;&nbsp;Defecating. Strictly, materials that leave the body by the process of defecation are undetectable food materials - rather than waste products formed by the metabolic processes that occur in the body. (Their cooler is due to the undetectable food itself, and to the effects of any excess bile.)</li>
";
						echo "<p align='justify'><b>Secretion -</b>&nbsp;&nbsp;&nbsp;Examples of substances secreted from the human body include:
<li>&nbsp;&nbsp;&nbsp;Hormones (sometimes described simply as ".'"chemical messengers"'.")</li>
<li>&nbsp;&nbsp;&nbsp;Sebum (from sebaceous glands), e.g. ear wax.</li>
</p>";
						echo "<p align='justify'><b>Circulation -</b>&nbsp;&nbsp;&nbsp;In human there are two circulation systems:<br/>
Primary Circulation = Blood Circulation,</br>
and
Secondary Circulation = The Lymphatic System.
</p>";
					}
					elseif(isset($_GET['branches'])){
						echo "<p align='justify'>Bacteriology – the study of bacteria.</p>";
						echo "<ul><li>Virology – the study of viruses.</li>
<li>Mycology – the study of fungi.</li>
<li>Entomology – the study of insects.</li>
<li>Ichthyology – the study of fishes.</li>
<li>Herpetology – the study of lizards, snakes etc.</li>
<li>Ornithology – the study of birds.</li></ul>
";
						echo "<p align='justify'>Anatomy – the study of gross structure of an organism as seen in dissection.</br>
Morphology – the study of form and structure of plants and animals. It includes.</br>Histology – the study of minute structure of time bits of the body as seen with the &nbsp;&nbsp;&nbsp;help of a compound microscope.</p>";
						echo "<p align='justify'>Cytology – the study of structure and function of animal and plant cells.</br><ul>
<li>Physiology – the study of functions and activities of organisms and their parts.</li>
<li>Embryology – the study of formation and development of embryo of plants and animals.</li>
<li>Taxonomy – the science of naming, grouping and classifying plants and animals. It is called Systematic.</li></ul>
</p>";
						echo "<p align='justify'>Ecology – the study of the relationship of an organism to both its living and non living environment.</br><ul><li>Biogeography – the study of geographical distribution of plants and animals.</li>
<li>Paleontology – the study of prehistoric forms of life through fossils of plants and animals.</li>
<li>Genetics – the sciences of the transmission of body characteristics from parents to offspring.</li>
<li>Parasitology – the study of parasites, the organisms that live on or inside other organisms and draw nourishment from the hosts.</li>
<li>Pathology – the study of diseases of plants and animals.</li>
<li>Immunology – the science that deals with the phenomena and  causes of immunity (resistance to or defend against diseases)</li>
<li>Eugenics – the science which aims to improve the human race through controlled heredity.</li>
<li>Biochemistry – the study of chemicals and reaction that take place inside the living things. One of its numerous applications is DNA fingerprinting.
Applied Biology.
Biology has enormous applications in other branches of science. It forms an important part of the following:</li><ul>
<li>Agriculture – raising crops and livestock (cow, buffalo etc).</li>
<li>Veterinary Science – treatment and surgery of animals.</li>
<li>Marine Biology – study of life in the sea.</li></ul>
<li>Household Biology – study of household animals, insects etc, including how to prevent damage to our own body and to our belongings.</li>
<li>Horticulture – science and art of growing fruits, vegetables, flowers or ornamental plants.</li>
<li>Sericulture – technique of producing silk by raising silkworms.</li>
<li>Pisciculture – the technique of growing fish.</li>
<li>Molecular Biology – interpreting biological events in terms of molecules in the cell.</li>
<li>Biotechnology – the application of biological processes in technology. It includes areas such as biogas production, food processing, genetic engineering, antibiotic production, extracting of extracellular enzymes used as bio-detergents in laundry washing powders, vaccine production, anti bodies, tissue culture etc.</li>
<li>Cloning – it is a rapidly advancing branch of biotechnology. Several animals have been cloned in which a body cell is used with no involvement of the male sperms. It also includes modifying crops easier to grow and improving their quality.</li>
<li>Bioengineering – which includes techniques like the making of artificial limbs, joints and other parts of the body from metals or plastic etc? It also includes modifying crops easier to grow and improving their food quality.</li>
<li>Nuclear Biology – the study of the effects of radioactivity on living things which is also called Radiation Biology.</li>
<li>Space Biology – the study of survival problems of living things in outer space.</li>
<li>Exobiology – it is one the newest sciences, which contemplates to study life elsewhere in the universe.</li>
<li>Genomics – the study of genomes as opposed to individual genes. Genome is the entire DNA sequence of an organism.</li>
<li>Bioinformatics – management and analysis of biological information stored in databases.</li>
<li>Biometrics – the verification of a person by his certain body features such as the patter of iris in the eye and behavioral characteristics.</li></ul>
</p>";
					}
					elseif(isset($_GET['photosynthesis'])){
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;Processes that are carried out at the cellular level, but are not necessarily restricted to a single cell. For example, cell communication occurs among more than one cell, but occurs at the cellular level.</p>";

					echo "<p align='justify'>&nbsp;&nbsp;&nbsp;<b>Cell signaling</b> -is part of a complex system of communication that governs basic cellular activities and coordinates cell actions. The ability of cells to perceive and correctly respond to their microenvironment is the basis of development, tissue repair, and immunity as well as normal tissue homeostasis. Errors in cellular information processing are responsible for diseases such as cancer, autoimmunity, and diabetes. By understanding cell signaling, diseases may be treated effectively and, theoretically, artificial tissues may be created.[citation needed]</p>";
					echo "<p align='justify'>&nbsp;&nbsp;&nbsp;Traditional work in biology has focused on studying individual parts of cell signaling pathways. Systems biology research helps us to understand the underlying structure of cell signaling networks and how changes in these networks may affect the transmission and flow of information. Such networks are complex systems in their organization and may exhibit a number of emergent properties including bistability and ultrasensitivity. Analysis of cell signaling networks requires a combination of experimental and theoretical approaches including the development and analysis of simulations and modeling</p>";
					echo "<p align='justify'>&nbsp;&nbsp;&nbsp;communicate with each other via direct contact (juxtacrine signaling), over short distances (paracrine signaling), or over large distances and/or scales (endocrine signaling).</p>";
					echo "<p align='justify'>&nbsp;&nbsp;&nbsp;Some cell-to-cell communication requires direct cell–cell contact. Some cells can form gap junctions that connect their cytoplasm to the cytoplasm of adjacent cells. In cardiac muscle, gap junctions between adjacent cells allows for action potential propagation from the cardiac pacemaker region of the heart to spread and coordinately cause contraction of the heart.</p>";
					echo "<p align='justify'>&nbsp;&nbsp;&nbsp;The Notch signaling mechanism is an example of juxtacrine signaling (also known as contact-dependent signaling) in which two adjacent cells must make physical contact in order to communicate. This requirement for direct contact allows for very precise control of cell differentiation during embryonic development. In the worm Caenorhabditis elegans, two cells of the developing gonad each have an equal chance of terminally differentiating or becoming a uterine precursor cell that continues to divide. The choice of which cell continues to divide is controlled by competition of cell surface signals. One cell will happen to produce more of a cell surface protein that activates the Notch receptor on the adjacent cell. This activates a feedback loop or system that reduces Notch expression in the cell that will differentiate and that increases Notch on the surface of the cell that continues as a stem cell.</p>";
					echo "<p align='justify'>&nbsp;&nbsp;Many cell signals are carried by molecules that are released by one cell and move to make contact with another cell. Endocrine signals are called hormones. Hormones are produced by endocrine cells and they travel through the blood to reach all parts of the body. Specificity of signaling can be controlled if only some cells can respond to a particular hormone. Paracrine signals such as retinoic acid target only cells in the vicinity of the emitting cell. Neurotransmitters represent another example of a paracrine signal. Some signaling molecules can function as both a hormone and a neurotransmitter. For example, epinephrine and norepinephrine can function as hormones when released from the adrenal gland and are transported to the heart by way of the blood stream. Norepinephrine can also be produced by neurons to function as a neurotransmitter within the brain. Estrogen can be released by the ovary and function as a hormone or act locally via paracrine or autocrine signaling.[8] Active species of oxygen and nitric oxide can also act as cellular messengers. This process is dubbed redox signaling.&nbsp;</p>";
					echo "<p align='justify'><b>Receptors for cell moves</b></p>";
					echo "<p align='justify'>&nbsp;&nbsp;&nbsp;Cells receive information from their environment through a class of proteins known as receptors. Notch is a cell surface protein that functions as a receptor. Animals have a small set of genes that code for signaling proteins that interact specifically with Notch receptors and stimulate a response in cells that express Notch on their surface. Molecules that activate (or, in some cases, inhibit) receptors can be classified as hormones, neurotransmitters, cytokines, and growth factors, but all of these are called receptor ligands. The details of ligand-receptor interactions are fundamental to cell signaling.</p>";
					echo "<p align='justify'>&nbsp;&nbsp;&nbsp;As shown in Notch acts as a receptor for ligands that are expressed on adjacent cells. While many receptors are cell surface proteins, some are found inside cells. For example, estrogen is a hydrophobic molecule that can pass through the lipid bilayer of cell surface membranes. Estrogen receptors inside cells of the uterus can be activated by estrogen that comes from the ovaries, enters the target cells, and binds to estrogen receptors.</p>";
					echo "<p align='justify'>&nbsp;&nbsp;&nbsp;A number of transmembrane receptors for molecules that include peptide hormones and of intracellular receptors for steroid hormones exist, giving to a cell the ability to respond to a great number of hormonal and pharmacological stimuli. In diseases, often, proteins that interact with receptors are aberrantly activated, resulting in constitutively activated downstream signals.</p>";
					echo "<p align='justify'>&nbsp;&nbsp;&nbsp;For several types of intercellular signaling molecules that are unable to permeate the hydrophobic cell membrane due to their hydrophilic nature, the target receptor is expressed on the membrane. When such signaling molecule activates its receptor, the signal is carried into the cell usually by means of a second messenger such as cAMP.</p>";
					echo "<p align='justify'>&nbsp;&nbsp;&nbsp;These notes follow the video through, commenting further on the cells and organisms seen and they suggest some simple practical demonstrations suitable for the lab or class room.</p>";
					echo "<b>Photosynthesis</b></br>";
					echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="320" height="240" id="FLVPlayer">
  <param name="movie" value="FLVPlayer_Progressive.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="scale" value="noscale" />
  <param name="salign" value="lt" />
  <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/photosynthesis_%28light_reactions%29&amp;autoPlay=false&amp;autoRewind=false" />
  <param name="swfversion" value="8,0,0,0" />
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don'."'t". 'want users to see the prompt. -->
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="320" height="240">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="scale" value="noscale" />
    <param name="salign" value="lt" />
    <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/photosynthesis_%28light_reactions%29&amp;autoPlay=false&amp;autoRewind=false" />
    <param name="swfversion" value="8,0,0,0" />
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
</script>';
					echo '<p align="justify">&nbsp;&nbsp;&nbsp;<b>CELL MEMBRAN  </b> -This section starts with a rare, unidentified amoeba, then follows cultured cells of newt lung tissue, favourites of the microscopist because they are very large and flatten against the slide. These cells star throughout the video. The smaller cells are cultured mouse epithelial cells. The very large pulsing cell, speeded up by time-lapse, is the slime mould Physarum. A little later is an antheridium and spiral oogonium of the alga Chara (note the streaming); then a Tradescantia stamen hair and a diatom (alga).</br>
<b>CYTOPLASM </b> -cultured newt cells. The motion of the cell margin, called "ruffling", is an actin-based movement common in many animal cells.</br>
<b>MITOCHONDRIA </b> -cultured newt cells and PtK (mammalian) cells.</br> 
</b>CHLOROPLASTS </b> -To see chloroplasts in living cells: place a small, pale green leaf of Impatiens (the common garden flower) in water and then aspirate under a vacuum; over about 30 mins. bubbles will appear as air expands through the stomata. Then remove the vacuum slowly. Water will then fill the air spaces in the mesophyll. Now mount the leaf under water: the tissue should be transparent while cells and cellular activity should be clear. The red alga releasing spores (carpospores) in Spyridia; the next (red filaments) is Erythrocladia and the bluish-green one is Chroodactylon.</br>
<b>ENDOPLASMIC RETICULUM </b> -cells of epidermal peel from an onion prepared as above. </br>
<b>GOLGI BODIES</b> -the first transmission electron micrograph is from frozen mouse epididymal cells; next is by a transmission electron micrograph of a golgi body in the green alga Oedogonium. The live green algal cell is Micrasterias followed by the diatom Surirella. During pinocytosis, in mouse macrophages and newt cells, watch carefully to see the vesicles forming at the cell margin. The feeding protozoan is probably Actinophrys. The alga secreting tine plates, called scales, is Pleurochrysis, and the scanning micrographs are of scales from the closely related Coccolithus. </br>
<b>VACUOLES</b> -Celery stems are, of course, familiar and easy to slice up. The cells have huge vacuoles and like many other plants cells, can be likened to water-filled balloons. Healthy cells of Chara (mentioned earlier) are rigid because of turgor pressure inside their large vacuole and they collapse dramatically when punctured. The following simple experiment, shown in our video disc Living Cells, demonstrates the importance of turgor pressure. Place some filaments into fairly concentrated sugar in water. After about 5 mins, the cells completely lose their rigidity. Place them carefully in fresh water; as the sugar diffuses away, the cells inflate like miniature balloons.</br>
<b>NUCLEUS and MITOSIS</b> are mostly in newt cells.</br> 
<b>CYTOSKELETON </b> -the actin and microtubule cytoskeletons were stained by fluorescently-labelled antibodies. The streaming cells are Tradescantia and Chara, followed by an amoeba. The brilliantly coloured pulsing cells are chromatophores in scales of fish. Then there are several cell division sequences, including the euglenoid flagellate Phacus, several desmids (complex, symmetrical green algae) and Volvox releasing baby colonies. A mammalian egg cell (mouse) is surrounded by sperm; this is followed by a cleaving embryo of a starfish; the final embryo is that of the zebrafish. 
Cells have to carry out numerous functions to survive. These function range from replication and energy conversion to molecule transport and the various signaling used in cellular communication. While they seem to be relatively fundamental processes, many of them require complicated cascades of biochemical reactions. In this section, you will learn about some of the important cellular processes that are essential to the survival of cells. Choose an option from below to proceed
</p>';
					echo '<table cellpadding="0" cellspacing="0">';
					echo '<tr>';
					echo '<td><img src="images/sad.JPG"></td>';
					echo '<td><img src="images/sad1.JPG"></td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td><img src="images/asd1.JPG"></td>';
					echo '</table>';
					echo "<p align='right'><a href='tutorial.php?photosynthesisII'>Next</a></p>";
					}
					elseif(isset($_GET['photosynthesisII'])){
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;Photosynthesis (English pronunciation: /foʊtoʊˈsɪnθəsɪs/; from the Greek φώτο- [photo-],". '"light,"'.'" and σύνθεσις [synthesis],"'. '"putting together",'. '"composition")'." is a chemical process that converts carbon dioxide into organic compounds, especially sugars, using the energy from sunlight. Photosynthesis occurs in plants, algae, and many species of bacteria, but not in archaea. Photosynthetic organisms are called photoautotrophs, since they can create their own food. In plants, algae, and cyanobacteria, photosynthesis uses carbon dioxide and water, releasing oxygen as a waste product. Photosynthesis is vital for all aerobic life on Earth. In addition to maintaining normal levels of oxygen in the atmosphere, photosynthesis is the source of energy for nearly all life on earth, either directly, through primary production, or indirectly, as the ultimate source of the energy in their food, the exceptions being chemoautotrophs that live in rocks or around deep sea hydrothermal vents. The rate of energy capture by photosynthesis is immense, approximately 100 terawatts, which is about six times larger than the power consumption of human civilization. As well as energy, photosynthesis is also the source of the carbon in all the organic compounds within organisms' bodies. In all, photosynthetic organisms convert around 100–115  petagrams of carbon into biomass per year.
Although photosynthesis can happen in different ways in different species, some features are always the same. For example, the process always begins when energy from light is absorbed by proteins called photosynthetic reaction centers that contain chlorophylls. In plants, these proteins are held inside organelles called chloroplasts, while in bacteria they are embedded in the plasma membrane. Some of the light energy gathered by chlorophylls is stored in the form of adenosine triphosphate (ATP). The rest of the energy is used to remove electrons from a substance such as water. These electrons are then used in the reactions that turn carbon dioxide into organic compounds. In plants, algae and cyanobacteria, this is done by a sequence of reactions called the Calvin cycle, but different sets of reactions are found in some bacteria, such as the reverse Krebs cycle in Chlorobium. Many photosynthetic organisms have adaptations that concentrate or store carbon dioxide. This helps reduce a wasteful process called photorespiration that can consume part of the sugar produced during photosynthesis.
</p>'";
						echo '<img src="images/asd2.JPG"><br/>';
						echo '<img src="images/asd3.JPG">';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Photosynthetic organisms are photoautotrophs, which means that they are repositories of energy, they are able to synthesize food directly from carbon dioxide using energy from light. They accrue it as part of their potential energy. However, not all organisms that use light as a source of energy carry out photosynthesis, since photoheterotrophs use organic compounds, rather than carbon dioxide, as a source of carbon. In plants, algae and cyanobacteria, photosynthesis releases oxygen. This is called oxygenic photosynthesis. Although there are some differences between oxygenic photosynthesis in plants, algae and cyanobacteria, the overall process is quite similar in these organisms. However, there are some types of bacteria that carry out anoxygenic photosynthesis, which consumes carbon dioxide but does not release oxygen.</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Carbon dioxide is converted into sugars in a process called carbon fixation. Carbon fixation is a redox reaction, so photosynthesis needs to supply both a source of energy to drive this process, and the electrons needed to convert carbon dioxide into a carbohydrate, which is a reduction reaction. In general outline, photosynthesis is the opposite of cellular respiration, where glucose and other compounds are oxidized to produce carbon dioxide, water, and release chemical energy. However, the two processes take place through a different sequence of chemical reactions and in different cellular compartments.</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The general equation for photosynthesis is therefore:
2n CO2 + 2n DH2 + photons → 2(CH2O)n + 2n A
Carbon dioxide + electron donor + light energy → carbohydrate + oxidized electron donor
In oxygenic photosynthesis water is the electron donor and, since its hydrolysis releases oxygen, the equation for this process is:
2n CO2 + 4n H2O + photons → 2(CH2O)n + 2n O2 + 2n H2O
carbon dioxide + water + light energy → carbohydrate + oxygen + water
Often 2n water molecules are cancelled on both sides, yielding:
2n CO2 + 2n H2O + photons → 2(CH2O)n + 2n O2
carbon dioxide + water + light energy → carbohydrate + oxygen
Other processes substitute other compounds (such as arsenite) for water in the electron-supply role; the microbes use sunlight to oxidize arsenite to arsenate:[11] The equation for this reaction is:
CO2 + (AsO33–) + photons → (AsO43–) + CO [12]
carbon dioxide + arsenite + light energy → arsenate + carbon monoxide (used to build other compounds in subsequent reactions)
Photosynthesis occurs in two stages. In the first stage, light-dependent reactions or light reactions capture the energy of light and use it to make the energy-storage molecules ATP and NADPH. During the second stage, the light-independent reactions use these products to capture and reduce carbon dioxide.
Most organisms that utilize photosynthesis to produce oxygen use visible light to do so, although at least three use infrared radiation.</br><img src="images/asd4.JPG"></p>';
echo "<h4>Photosynthetic membranes and organelles</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The proteins that gather light for photosynthesis are embedded within cell membranes. The simplest way these are arranged is in photosynthetic bacteria, where these proteins are held within the plasma membrane. However, this membrane may be tightly folded into cylindrical sheets called thylakoids, or bunched up into round vesicles called intracytoplasmic membranes. These structures can fill most of the interior of a cell, giving the membrane a very large surface area and therefore increasing the amount of light that the bacteria can absorb.</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;In plants and algae, photosynthesis takes place in organelles called chloroplasts. A typical plant cell contains about 10 to 100 chloroplasts. The chloroplast is enclosed by a membrane. This membrane is composed of a phospholipid inner membrane, a phospholipid outer membrane, and an intermembrane space between them. Within the membrane is an aqueous fluid called the stroma. The stroma contains stacks (grana) of thylakoids, which are the site of photosynthesis. The thylakoids are flattened disks, bounded by a membrane with a lumen or thylakoid space within it. The site of photosynthesis is the thylakoid membrane, which contains integral and peripheral membrane protein complexes, including the pigments that absorb light energy, which form the photosystems.</br>
&nbsp;&nbsp;&nbsp;Plants absorb light primarily using the pigment chlorophyll, which is the reason that most plants have a green color. Besides chlorophyll, plants also use pigments such as carotenes and xanthophylls. Algae also use chlorophyll, but various other pigments are present as phycocyanin, carotenes, and xanthophylls in green algae, phycoerythrin in red algae (rhodophytes) and fucoxanthin in brown algae and diatoms resulting in a wide variety of colors.
These pigments are embedded in plants and algae in special antenna-proteins. In such proteins all the pigments are ordered to work well together. Such a protein is also called a light-harvesting complex.</br>
&nbsp;&nbsp;&nbsp;Although all cells in the green parts of a plant have chloroplasts, most of the energy is captured in the leaves. The cells in the interior tissues of a leaf, called the mesophyll, can contain between 450,000 and 800,000 chloroplasts for every square millimeter of leaf. The surface of the leaf is uniformly coated with a water-resistant waxy cuticle that protects the leaf from excessive evaporation of water and decreases the absorption of ultraviolet or blue light to reduce heating. The transparent epidermis layer allows light to pass through to the palisade mesophyll cells where most of the photosynthesis takes place.
</p>';
echo "<img src='images/asd5.JPG'></br></br>";
						echo "<h4>The Calvin Cycle</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;In the light-independent or dark reactions the enzyme RuBisCO captures CO2 from the atmosphere and in a process that requires the newly formed NADPH, called the Calvin-Benson Cycle, releases three-carbon sugars, which are later combined to form sucrose and starch. The overall equation for the light-independent reactions in green plants is:</br>
3 CO2 + 9 ATP + 6 NADPH + 6 H+ → C3H6O3-phosphate + 9 ADP + 8 Pi + 6 NADP+ + 3 H2O
</p>';					echo 'Overview of the Calvin cycle and carbon fixation<img src="images/asd6.JPG" title="Overview of the Calvin cycle and carbon fixation">';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;To be more specific, carbon fixation produces an intermediate product, which is then converted to the final carbohydrate products. The carbon skeletons produced by photosynthesis are then variously used to form other organic compounds, such as the building material cellulose, as precursors for lipid and amino acid biosynthesis, or as a fuel in cellular respiration. The latter occurs not only in plants but also in animals when the energy from plants gets passed through a food chain.</br>
&nbsp;&nbsp;&nbsp;The fixation or reduction of carbon dioxide is a process in which carbon dioxide combines with a five-carbon sugar, ribulose 1,5-bisphosphate (RuBP), to yield two molecules of a three-carbon compound, glycerate 3-phosphate (GP), also known as 3-phosphoglycerate (PGA). GP, in the presence of ATP and NADPH from the light-dependent stages, is reduced to glyceraldehyde 3-phosphate (G3P). This product is also referred to as 3-phosphoglyceraldehyde (PGAL) or even as triose phosphate. Triose is a 3-carbon sugar (see carbohydrates). Most (5 out of 6 molecules) of the G3P produced is used to regenerate RuBP so the process can continue (see Calvin-Benson cycle). The 1 out of 6 molecules of the triose phosphates not "recycled" often condense to form hexose phosphates, which ultimately yield sucrose, starch and cellulose. The sugars produced during carbon metabolism yield carbon skeletons that can be used for other metabolic reactions like the production of amino acids and lipids.
</p>';					echo "<h4>Carbon concentrating mechanisms</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Overview of C4 carbon fixation</br>
In hot and dry conditions, plants close their stomata to prevent the loss of water. Under these conditions, CO2 will decrease, and oxygen gas, produced by the light reactions of photosynthesis, will decrease in the stem, not leaves, causing an increase of photorespiration by the oxygenase activity of ribulose-1,5-bisphosphate carboxylase/oxygenase and decrease in carbon fixation. Some plants have evolved mechanisms to increase the article: C4 carbon fixation
</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;C4 plants chemically fix carbon dioxide in the cells of the mesophyll by adding it to the three-carbon molecule phosphoenolpyruvate (PEP), a reaction catalyzed by an enzyme called PEP carboxylase, creating the four-carbon organic acid oxaloacetic acid. Oxaloacetic acid or malate synthesized by this process is then translocated to specialized bundle sheath cells where the enzyme RuBisCO and other Calvin cycle enzymes are located, and where CO2 released by decarboxylation of the four-carbon acids is then fixed by RuBisCO activity to the three-carbon sugar 3-phosphoglyceric acids. The physical separation of RuBisCO from the oxygen-generating light reactions reduces</p>';
						echo '<img src="images/asd7.JPG">';
						echo "<p align='rigth'><a href='tutorial.php?photosynthesis'>Back</a></p>";
					}
					elseif(isset($_GET['classification'])){
						echo "<h2>Plant Tissues</h2>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;A mature vascular plant (any plant other than mosses and liverworts), contains several types of differentiated cells. These are grouped together in tissues. Some tissues contain only one type of cell. Some consist of several.</p>';
						echo "<img src='images/PlantTissues.jpeg' title='Plant Tissue'></br>";
						echo "<h4>Meristematic</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The main function of meristematic tissue is mitosis. The cells are small, thin-walled, with no central vacuole and no specialized features.</br>
&nbsp;&nbsp;&nbsp;Meristematic tissue is located in.<ol>the apical meristems at the growing points of roots and stems.
the secondary meristems (lateral buds) at the nodes of stems (where branching occurs) , and in some plants,
meristematic tissue, called the cambium, that is found within mature stems and roots.</ol></p>';
echo "<h4>Protective</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Protective tissue covers the surface of leaves and the living cells of roots and stems. Its cells are flattened with their top and bottom surfaces parallel. The upper and lower epidermis of the leaf are examples of protective tissue.</p>';
						echo "<h4>Parenchyma</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The cells of parenchyma are large, thin-walled, and usually have a large central vacuole. They are often partially separated from each other and are usually stuffed with plastids.</br>
&nbsp;&nbsp;&nbsp;In areas not exposed to light, colorless plastids predominate and food storage is the main function. The cells of the white potato are parenchyma cells.</br>
&nbsp;&nbsp;&nbsp;Where light is present, e.g., in leaves, chloroplasts predominate and photosynthesis is the main function.</p>';
echo "<h4>Sclerenchyma</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The walls of these cells are very thick and built up in a uniform layer around the entire margin of the cell. Often, the cell dies after its cell wall is fully formed. Sclerenchyma cells are usually found associated with other cells types and give them mechanical support.</br>
&nbsp;&nbsp;&nbsp;Sclerenchyma is found in stems and also in leaf veins. Sclerenchyma also makes up the hard outer covering of seeds and nuts.</p>';
echo "<h4>Collenchyma</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Collenchyma cells have thick walls that are especially thick at their corners. These cells provide mechanical support for the plant. They are most often found in areas that are growing rapidly and need to be strengthened. The petiole ("stalk") of leaves is usually reinforced with collenchyma.</p>';
						echo "<h4>Xylem</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Xylem conducts water and dissolved minerals from the roots to all the other parts of the plant.</br>&nbsp;&nbsp;&nbsp;In angiosperms, most of the water travels in the xylem vessels. These are thick-walled tubes that can extend vertically through several feet of xylem tissue. Their diameter may be as large as 0.7 mm. Their walls are thickened with secondary deposits of cellulose and are usually further strengthened by impregnation with lignin. The secondary walls of the xylem vessels are deposited in spirals and rings and are usually perforated by pits.</br>&nbsp;&nbsp;&nbsp;Xylem vessels arise from individual cylindrical cells oriented end to end. At maturity the end walls of these cells dissolve away, and the cytoplasmic contents die. The result is the xylem vessel, a continuous nonliving duct.</br>&nbsp;&nbsp;&nbsp;Xylem also contains tracheids. These are individual cells tapered at each end so the tapered end of one cell overlaps that of the adjacent cell. Like xylem vessels, they have thick, lignified walls and, at maturity, no cytoplasm. Their walls are perforated so that water can flow from one tracheid to the next. The xylem of ferns and conifers contains only tracheids.</br>&nbsp;&nbsp;&nbsp;In woody plants, the older xylem ceases to participate in water transport and simply serves to give strength to the trunk. Wood is xylem. When counting the annual rings of a tree, one is counting rings of xylem</p>';
						echo "<h4>Phloem</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The main components of phloem are sieve elements and companion cells.</br></p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Sieve elements are so-named because their end walls are perforated. This allows cytoplasmic connections between vertically-stacked cells. The result is a sieve tube that conducts the products of photosynthesis — sugars and amino acids — from the place where they are manufactured (a "source"), e.g., leaves, to the places ("sinks") where they are consumed or stored; such as</p>';
						echo "<ul>roots</ul>";
						echo "<ul>growing tips of stems and leaves</ul>";
						echo "<ul>flowers</ul>";
						echo "<ul>ruits, tubers, corms, etc.</ul>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Sieve elements have no nucleus and only a sparse collection of other organelles. They depend on the adjacent companion cells for many functions.</br>&nbsp;&nbsp;&nbsp;Companion cells move sugars and amino acids into and out of the sieve elements. In "source" tissue, such as a leaf, the companion cells use transmembrane proteins to take up — by active transport — sugars and amino acids from the cells manufacturing them. Water follows by osmosis. These materials then move into adjacent sieve elements by diffusion through plasmodesmata. The pressure created by osmosis drives the flow of materials through the sieve tubes.</br>&nbsp;&nbsp;&nbsp;
In "sink" tissue, the sugars and amino acids leave the sieve tubes by diffusion through plasmodesmata connecting the sieve elements to the cells of their destination. Again, water follows by osmosis where it may</br>leave the plant by transpiration or</br>
increase the volume of the cells or</br>
move into the xylem for recycling through the plant.</p>';
echo "<h2>Animal Tissue</h2>";
echo "<h4>Tissue</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Multicellular (large) organisms function more efficiently if cells become specialized for specific functions.</br>A tissue is composed of cells that function together in a specialized activity.</br>There are four types of tissues found in animals: epithelial, connective, nerve, and muscle tissue.</br>Sponges do not have tissues.</p>';
						echo "<h4>Organs</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Organs are composed of two or more tissues which function together to perform a common task. For example, the heart contains all 4 types of tissues.</br>Sponges and cnidarians do not have organs.</p>';
						echo "<h4>Organ systems</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;An organ system consists of two or more organs which perform a specific task.</br>Some organ systems are: the integumentary, nervous, sensory, endocrine, skeletal, muscular, circulatory, immune, digestive, respiratory, excretory, and reproductive systems.</p>';
						echo "<h4>Embryonic Tissues</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Ectoderm, mesoderm, and endoderm are embryonic tissues that give rise to all of the tissues, organs, and organ systems in the body.</p>';
						echo "<img src='images/embronintissue.gif'></br>";
						echo "<p align='right'><a href='tutorial.php?classificationII'>Next</a></p>";
						
					}
					elseif(isset($_GET['classificationII'])){
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Ectoderm forms the outer layer of skin and nervous system. Mesoderm forms the muscles, connective tissues, skeleton, kidneys, and circulatory and reproductive organs. Endoderm forms the lining of the gut, respiratory tract, and urinary bladder. It also forms the glands associated with the gut and respiratory tract.</p>';
						echo "<h4>Junctions</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Cells are joined to each other by proteins. The point of connection between two cells is called a junction.</br> Junctions bind cells together. Some kinds of junctions prevent the passage of molecules between cells. Other kinds of junctions allow molecules to pass from one cell to another.</p>';
						echo "<h4>Epithelial Tissue</h4>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Epithelial tissue covers external surfaces and internal cavities and organs. Glands are also composed of epithelial tissue.</br>nbsp;&nbsp;&nbsp;Epithelia forms boundaries. Most substances that move into or out of the body must pass through epithelial tissue.</br>nbsp;&nbsp;&nbsp;One surface of the tissue is free and the other adheres to a basement membrane.</p>';
						echo "<img src='images/Animal5.gif'></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The photograph below shows kidney tubules. The cells lining the tubules are epithelial tissue. One surface is attached (the basal surface) and the other surface is free.</p>';
						echo "<img src='images/cell_polarity.jpg'></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The apical surface of epithelial cells may have tiny projections called microvilli. These function to increase surface area. For example, microvilli on intestinal cells increase the surface area available for absorption.</br>
&nbsp;&nbsp;&nbsp;Eipthelial cells may have cilia. Cilia can be seen on the cells lining the trachea in the photograph below. They function to move mucus and trapped particles upward toward the mouth where it will be swallowed, thus keeping the trachea clear of foreign particles.</p>';
echo "<img src='images/cilia.jpg'></br>";
echo "<h4>Function of Epithelial Tissue</h4>";
echo "<h><strong>Protection</strong></h>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Epithelial tissue forms the skin of many animals.</br>Terrestrial vertebrates have keratin in their skin cells making them resistant to water loss.</br>Ciliated epithelium lines the respiratory tract. Numerous cilia on these cells sweep impurities toward the throat.</p>';
						echo "<h><strong>Absorption</strong></h>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Absorption is an important function of epithelial tissue. For example, the gut is lined with epithelial tissue and it functions to absorb nutrients from food. The lungs are also lined with epithelial tissue and it functions to absorb oxygen.</p>';
						echo "<h><strong>Secretion</strong></h>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Glandular epithelium secretes chemicals.</br>&nbsp;&nbsp;&nbsp;Endocrine glands secrete hormones directly into the extracellular space.<br/>&nbsp;&nbsp;&nbsp;Exocrine glands often secrete through DUCTS; they secrete mucus, saliva, wax, milk, etc.</p>';
						echo "<h>Layers</h>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;<strong>Layers</strong>is one cell thick.</br>&nbsp;&nbsp;&nbsp;Example: Respiratory surfaces such as the lining of the lungs or the skin of a frog (below) are only one cell thick so that gasses can pass through quickly.</p>';
						echo "<img src='images/Image2_small1.jpg' title='Squamous Epithelium - Frog Skin Flat Mount'></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;<strong>Stratified epithelium </strong> has more than one layer. It is found in areas of high abrasion such as the skin or the lining of the mouth.</br>&nbsp;&nbsp;&nbsp;Cell division occurs in cells near the basement membrane, pushing older cells toward the surface. Cells lost by abrasion at the surface are replaced by cells underneath. </p>';
						echo "<h>Example: the human skin shown below contains stratified epithelium.</h>";
						echo "<img src='images/Image3_small.jpg'>Stratified Squamous Epithelium, Human sec. X 100</br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;<strong>Pseudostratified epithelium</strong></p>';
						echo "<p align='left'><a href='tutorial.php?classification'>Back</a></p>";
					}
					elseif(isset($_GET['atom-and-molecule'])){
						
						echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="320" height="240" id="FLVPlayer">
  <param name="movie" value="FLVPlayer_Progressive.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="scale" value="noscale" />
  <param name="salign" value="lt" />
  <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/making_molecules_with_atoms&amp;autoPlay=false&amp;autoRewind=false" />
  <param name="swfversion" value="8,0,0,0" />
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="320" height="240">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="scale" value="noscale" />
    <param name="salign" value="lt" />
    <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/making_molecules_with_atoms&amp;autoPlay=false&amp;autoRewind=false" />
    <param name="swfversion" value="8,0,0,0" />
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
</script>
';
						
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
					}
					elseif(isset($_GET['is'])){
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;"Integument" redirects here; in botany, an integument refers to an outer membrane of an ovule, which later develops into a seed coat.</br>&nbsp;&nbsp;&nbsp;The integumentary system (From Latin integumentum, from integere "to cover"; from in- + tegere "to cover") is the organ system that protects the body from damage, comprising the skin and its appendages (including hair, scales, feathers, and nails). The integumentary system has a variety of functions; it may serve to waterproof, cushion, and protect the deeper tissues, excrete wastes, and regulate temperature, and is the attachment site for sensory receptors to detect pain, sensation, pressure, and temperature. In most terrestrial vertebrates with significant exposure to sunlight, the integumentary system also provides for vitamin D synthesis.</p>';
						echo "<h1>Layers of the skin</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The integumentary system is the largest organ system. In humans, this system accounts for about 16 percent of total body weight and covers 1.5-2m2 of surface area. It distinguishes, separates, protects and informs the animal with regard to its surroundings. Small-bodied invertebrates of aquatic or continually moist habitats respire using the outer layer (integument). This gas exchange system, where gases simply diffuse into and out of the interstitial fluid, is called integumentary exchange.</br>&nbsp;&nbsp;&nbsp;
The human skin (integumentary) is composed of a minimum of 3 major layers of tissue, the Epidermis, the Dermis and Hypodermis. The Dermis comprises two sections, the Papillary and Reticular layers; they contain connective tissues, vessels, glands, follicles, hair roots, sensory nerve endings, and muscular tissue. The third layer is the Hypodermis and it is made up of adipose tissue.
</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;cells: keratinocytes, melanocytes, Merkel cells, and Langerhans cells. The major cell of the epidermis is the keratinocyte, which produces keratin. Keratin is a fibrous protein that aids in protection. Keratin is also a water-proofing protein. Millions of dead keratinocytes rub off daily. The majority of the skin on the body is keratinized, meaning waterproofed. The only skin on the body that is non-keratinized is the lining of skin on the inside of the mouth. Non-keratinized cells allow water to "stay" atop the structure.</br>&nbsp;&nbsp;&nbsp;
The protein keratin stiffens epidermal tissue to form fingernails. Nails grow from thin area called the nail matrix; growth of nails is 1-mm per week on average. The lunula is the crescent-shape area at the base of the nail, this is a lighter colour as it mixes with the matrix cells.
</p>';
echo "<h1>Dermis</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The dermis is the middle layer of skin, composed of dense irregular connective tissues such as collagen with elastin arranged in a diffusely bundled and woven pattern. These layers serve to give elasticity to the integument, allowing stretching and conferring flexibility, while also resisting distortions, wrinkling, and sagging. The dermal layer provides a site for the endings of blood vessels and nerves. Many chromatophores are also stored in this layer, as are the bases of integumental structures such as hair, feathers, and glands.</p>';
						echo "<h1>Hypodermis</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Although technically not part of the integumentary system, the hypodermis, or subcutaneous tissue, is the layer of tissue directly underneath the dermis. It is composed mainly of connective andadipose tissue. Its physiological functions include insulation, the storage of energy, and aiding in the anchoring of the skin. This is the thickest layer of the integumentary system.</p>';
						echo "<h1>Functions</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The integumentary system has multiple roles in homeostasis. All body systems work in an interconnected manner to maintain the internal conditions essential to the function of the body. The skin has an important job of protecting the body and acts as the'." body's".' first line of defense against infection, temperature change, and other challenges to homeostasis. Functions include:</p>';
						echo '<p align="justify">&bull;	Protect the '."body's".' internal living tissues and organs</br>
&bull;	Protect against invasion by infectious organisms</br>
&bull;	Protect the body from dehydration</br>
&bull;	Protect the body against abrupt changes in temperature, maintain homeostasis</br>
&bull;	Help excrete waste materials through perspiration</br>
&bull;	Act as a receptor for touch, pressure, pain, heat, and cold (see Somatosensory system)</br>
&bull;	Protect the body against sunburns by secreting melanin</br>
&bull;	Generate vitamin D through exposure to ultraviolet light</br>
&bull;	Store water, fat, glucose, and vitamin D</br>
&bull;	Maintenance of the body form</br>
&bull;	Formation of new cells from stratum germinativum to repair minor injuries</br>
&bull;	Aid in physical examination as color of the skin may indicate many conditions e.g.it becomes yellowish in jaundice
</p>';
echo "<h1>Diseases and injuries</h1></br>";
echo '<p align="justify">&nbsp;&nbsp;&nbsp;Possible diseases and injuries to the human integumentary system include:</p>';
						echo '<p align="justify">&bull;	Rash
&bull;	Blister
&bull;	'."Athlete's".' foot
&bull;	Infection
&bull;	Sunburn
&bull;	Skin cancer
&bull;	Albinism
&bull;	Acne
&bull;	Herpes
&bull;	Cold Sores
&bull;	Mosquito Bites
</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
					}
					elseif(isset($_GET['ss'])){
						echo "<h1>Human skeleton</h1></br>";
						echo '<center><img src="images/humanskeleton.jpg" title="Human Skeleton"></center></br>';
						echo '<center><img src="images/humanskeleton2.jpg" title="Human Skeleton"></center></br>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The human skeleton consists of both fused and individual bones supported and supplemented by ligaments, tendons, muscles andcartilage. It serves as a scaffold which supports organs, anchors muscles, and protects organs such as the brain, lungs and heart. The biggest bone in the body is the femur in the thigh and the smallest is the stapes bone in the middle ear. In an adult, the skeleton comprises around 30-40% of the total body weight,and half of this weight is water.</br>&nbsp;&nbsp;&nbsp;Fused bones include those of the pelvis and the cranium. Not all bones are interconnected directly: there are three bones in eachmiddle ear called the ossicles that articulate only with each other. The hyoid bone, which is located in the neck and serves as the point of attachment for the tongue, does not articulate with any other bones in the body, being supported by muscles and ligaments.</p>';
						echo "<h1>Development</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Early in gestation, a fetus has a cartilaginous skeleton from which the long bones and most other bones gradually form throughout the remaining gestation period and for years after birth in a process called endochondral ossification. The flat bones of the skull and theclavicles are formed from connective tissue in a process known as intramembranous ossification, and ossification of the mandibleoccurs in the fibrous membrane covering the outer surfaces of '."Meckel's".' cartilages. At birth, a newborn baby has over 300 bones, whereas on average an adult human has 206 bones (these numbers can vary slightly from individual to individual). The difference comes from a number of small bones that fuse together during growth, such as the sacrum and coccyx of the vertebral column.</p>';
						echo "<h1>Organization</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;There are over 206 bones in the adult human skeleton, a number which varies between individuals and with age - newborn babies have over 270 bones some of which fuse together into a longitudinal axis, the axial skeleton, to which the appendicular skeleton is attached.</p>';
						echo "<h1>Axial skeleton</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The axial skeleton (80 bones) is formed by the Vertebral column (26), the Rib cage (12 pairs of ribs and the sternum), and the skull (22 bones and 7 associated bones). The axial skeleton transmits the weight from the head, the trunk, and the upper extremities down to the lower extremities at the hip joints, and is therefore responsible for the upright position of the human body. Most of the body weight is located in back of the spinal column which therefore have the erectors spinae muscles and a large amount of ligaments attached to it resulting in the curved shape of the spine. The 366 skeletal muscles acting on the axial skeleton position the spine, allowing for big movements in the thoracic cage for breathing, and the head. Conclusive research cited by the American Society for Bone Mineral Research (ASBMR) demonstrates that weight-bearing exercise stimulates bone growth[citation needed]. Only the parts of the skeleton that are directly affected by the exercise will benefit. Non weight-bearing activity, including swimming and cycling, has no effect on bone growth.</p>';
						echo "<h1>Appendicular skeleton</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The appendicular skeleton (126 bones) is formed by the pectoral girdles (4), the upper limbs (60), the pelvic girdle (2), and the lower limbs (60). Their functions are to make locomotion possible and to protect the major organs of locomotion, digestion, excretion, and reproduction.</p>';
						echo "<h1>Function</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The skeleton serves 6 major/main functions.</p>';
						echo "<li><h1>Support</h1></li>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The skeleton provides the framework which supports the body and maintains its shape. The pelvis and associated ligaments and muscles provide a floor for the pelvic structures. Without the ribs, costal cartilages, the intercostal muscles and the heart would collapse.</p>';
						echo "<li><h1>Movement</h1></li>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The joints between bones permit movement, some allowing a wider range of movement than others, e.g. the ball and socket joint allows a greater range of movement than the pivot joint at the neck. Movement is powered by skeletal muscles, which are attached to the skeleton at various sites on bones. Muscles, bones, and joints provide the principal mechanics for movement, all coordinated by the nervous system.</p>';
						echo "<li><h1>Protection</h1></li>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The skeleton protects many vital organs:</p>';
						echo '&nbsp;&nbsp;&nbsp;&bull;The skull protects the brain, the eyes, and the middle and inner ears.</br></p>';
						echo '&nbsp;&nbsp;&nbsp;&bull;The vertebrae protects the spinal cord.</br>';
						echo '&nbsp;&nbsp;&nbsp;&bull;The rib cage, spine, and sternum protect the lungs, heart and major blood vessels.</br>&bull;The clavicle and scapula protect the shoulder.</br>&bull;The ilium and spine protect the digestive and urogenital systems and the hip.</br>&bull;The patella and the ulna protect the knee and the elbow respectively.</br>&bull;The carpals and tarsals protect the wrist and ankle respectively.';
						echo "<li><h1>Blood cell production</h1></li></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The skeleton is the site of haematopoiesis, which takes place in red bone marrow.</p>';
						echo "<li><h1>Storage</h1></li>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Bone matrix can store calcium and is involved in calcium metabolism, and bone marrow can store iron in ferritin and is involved in iron metabolism. However, bones are not entirely made of calcium,but a mixture of chondroitin sulfate and hydroxyapatite, the latter making up 70% of a bone.</p>';
						echo "<li><h1>Endocrine regulation</h1></li>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Bone cells release a hormone called osteocalcin, which contributes to the regulation of blood sugar (glucose) and fat deposition. Osteocalcin increases both the insulin secretion and sensitivity, in addition to boosting the number of insulin-producing cells and reducing stores of fat. external occipital protuberance (the small bump at the back of the skull), and the carrying angle of the forearm is more pronounced in females. Females also tend to have more rounded shoulder blades.</p>';
						echo "<h1>Sex-based differences</h1></br>";
						echo "<img src='images/disorder.JPG'>";
						echo "<h1>Disorders</h1>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;There are many disorders of the skeleton. One of the most common is osteoporosis.</p>';
						echo "<h1>Osteoporosis</h1>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Osteoporosis is a disease of bone, which leads to an increased risk of fracture. In osteoporosis, the bone mineral density (BMD) is reduced, bone microarchitecture is disrupted, and the amount and variety of non-collagenous proteins in bone is altered. Osteoporosis is defined by the World Health Organization (WHO) in women as a bone mineral density 2.5 standard deviations below peak bone mass (20-year-old sex-matched healthy person average) as measured by DXA; the term "established osteoporosis" includes the presence of a fragility fracture.[8] Osteoporosis is most common in women after the menopause, when it is called postmenopausal osteoporosis, but may develop in men and premenopausal women in the presence of particular hormonal disorders and other chronic diseases or as a result of smokingand medications, specifically glucocorticoids, when the disease is craned steroid- or glucocorticoid-induced osteoporosis (SIOP or GIOP).
Osteoporosis can be prevented with lifestyle advice and medication, and preventing falls in people with known or suspected osteoporosis is an established way to prevent fractures. Osteoporosis can also be prevented with having a good source of calcium and vitamin D. Osteoporosis can be treated with bisphosphonates and various other medical
</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
					}
					elseif(isset($_GET['celltheory'])){
						echo "<h1>Plant Cell</h1></br>";
						echo '<script type="text/javascript">

function onYouTubePlayerReady(playerId) { 
ytplayer = document.getElementById("video_overlay"); 
ytplayer.setVolume(100); 
} 

</script> 
<div id="videogallery">
<a rel="#voverlay" href="engine/swf/player.swf?url=../../data/video/parts_of_a_plant_cell.flv&volume=100" title="parts_of_a_plant_cell"><img src="data/thumbnails/parts_of_a_plant_cell.png" alt="parts_of_a_plant_cell" /><span></span></a><a id="videolb" href="http://videolightbox.com">Flash FLV Embed by VideoLightBox.com v1.10</a>
</div>';
echo "<h1>Animal Cell</h1></br>";
echo '<script type="text/javascript">

function onYouTubePlayerReady(playerId) { 
ytplayer = document.getElementById("video_overlay"); 
ytplayer.setVolume(100); 
} 

</script> 
<div id="videogallery">
<a rel="#voverlay" href="engine/swf/player.swf?url=../../data/video/parts_of_an_animal_cell.flv&volume=100" title="parts_of_an_animal_cell"><img src="data/thumbnails/parts_of_an_animal_cell.png" alt="parts_of_an_animal_cell" /><span></span></a><a id="videolb" href="http://videolightbox.com">Flash FLV Embed by VideoLightBox.com v1.10</a>
</div>';
					}
					elseif(isset($_GET['ms'])){
						echo "<center><img src='images/muscularsystem.jpg' title='Muscular System'></center></br>";
						echo "<p align='justify'>&nbsp;&nbsp;&nbsp;The muscular system is the anatomical system of a species that allows it to move. The muscular system in vertebrates is controlled through the nervous system, although some muscles (such as the cardiac muscle) can be completely autonomous.ss</p>";
						echo "<center><h1>Muscles</h1></center>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;There are three distinct types of muscles: skeletal muscles, cardiac or heart muscles, and smooth (non-striated) muscles. Muscles provide strength, balance, posture, movement and heat for the body to keep warm.</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Upon stimulation by an action potential, skeletal muscles perform a coordinated contraction by shortening each sarcomere. The best proposed model for understanding contraction is the sliding filament model of muscle contraction. Actin and myosin fibers overlap in a contractile motion towards each other. Myosin filaments have club-shaped heads that project toward the actin filaments.</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Larger structures along the myosin filament called myosin heads are used to provide attachment points on binding sites for the actin filaments. The myosin heads move in a coordinated style, they swivel toward the center of the sarcomere, detach and then reattach to the nearest active site of the actin filament. This is called a rachet type drive system. This process consumes large amounts of adenosine triphosphate (ATP).</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Energy for this comes from ATP, the energy source of the cell. ATP binds to the cross bridges between myosin heads and actin filaments. The release of energy powers the swiveling of the myosin head. Muscles store little ATP and so must continuously recycle the discharged adenosine diphosphatemolecule (ADP) into ATP rapidly. Muscle tissue also contains a stored supply of a fast acting recharge chemical, creatine phosphate which can assist initially producing the rapid regeneration of ADP into ATP.</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Calcium ions are required for each cycle of the sarcomere. Calcium is released from the sarcoplasmic reticulum into the sarcomere when a muscle is stimulated to contract. This calcium uncovers the actin binding sites. When the muscle no longer needs to contract, the calcium ions are pumped from the sarcomere and back into storage in the sarcoplasmic reticulum.</p>';
						echo "<h1>Anatomy</h1>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;There are approximately 639 skeletal muscles in the human body.
The following are some major muscles and their basic features:<a href="asd.html" target="_blank">Click here</a>
</p>';
						echo "<h1>Aerobic and anaerobic muscle activity</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;At rest, the body produces the majority of its ATP aerobically in the mitochondria without producing lactic acid or other fatiguing byproducts. During exercise, the method of ATP production varies depending on the fitness of the individual as well as the duration, and intensity of exercise. At lower activity levels, when exercise continues for a long duration (several minutes or longer), energy is produced aerobically by combining oxygen with carbohydrates and fats stored in the body. Activity that is higher in intensity, with possible duration decreasing as intensity increases, ATP production can switch to anaerobic pathways, such as the use of the creatine phosphate and the phosphagen system or anaerobic glycolysis. Aerobic ATP production is biochemically much slower and can only be used for long-duration, low intensity exercise, but produces no fatiguing waste products that can not be removed immediately from sarcomere and body and results in a much greater number of ATP molecules per fat or carbohydrate molecule. Aerobic training allows the oxygen delivery system to be more efficient, allowing aerobic metabolism to begin quicker. Anaerobic ATP production produces ATP much faster and allows near-maximal intensity exercise, but also produces significant amounts of lactic acid which render high intensity exercise unsustainable for greater than several minutes.The phosphagen system is also anaerobic, allows for the highest levels of exercise intensity, but intramuscular stores of phosphocreatine are very limited and can only provide energy for exercises lasting up to ten seconds. Recovery is very quick, with full creatine stores regenerated within five minutes.</p>';
						echo "<h1>Cardiac muscle</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Heart muscles are distinct from skeletal muscles because the muscle fibers are laterally connected to each other. Furthermore, just as with smooth muscles, they are not controlling themselves. Heart muscles are controlled by the sinus node influenced by the autonomic nervous system.</p>';
						echo "<h1>Smooth muscle</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Smooth muscles are controlled directly by the autonomic nervous system and are involuntary, meaning that they are incapable of being moved by conscious thought. Functions such as heart beat and lungs (which are capable of being willingly controlled, be it to a limited extent) are involuntary muscles but are not smooth muscles.</p>';
						echo "<h1>Control of muscle contraction</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Neuromuscular junctions are the focal point where a motor neuron attaches to a muscle. Acetylcholine, (a neurotransmitter used in skeletal muscle contraction) is released from the axon terminal of the nerve cell when an action potential reaches the microscopic junction, called a synapse. A group of chemical messengers cross the synapse and stimulate the formation of electrical changes, which are produced in the muscle cell when the acetylcholine binds to receptors on its surface. Calcium is released from its storage area in the'. "cell's".' sarcoplasmic reticulum. An impulse from a nerve cell causes calcium release and brings about a single, short muscle contraction called a muscle twitch. If there is a problem at the neuromuscular junction, a very prolonged contraction may occur, tetanus. Also, a loss of function at the junction can produce paralysis.</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Skeletal muscles are organized into hundreds of motor units, each of which involves a motor neuron, attached by a series of thin finger-like structures called axon terminals. These attach to and control discrete bundles of muscle fibers. A coordinated and fine tuned response to a specific circumstance will involve controlling the precise number of motor units used. While individual muscle units contract as a unit, the entire muscle can contract on a predetermined basis due to the structure of the motor unit. Motor unit coordination, balance, and control frequently come under the direction of thecerebellum of the brain. This allows for complex muscular coordination with little conscious effort, such as when one drives a car without thinking about the process.</p>';
						
					}
					elseif(isset($_GET['ds'])){
						
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Digestion is the mechanical and chemical breakdown of food into smaller components that are more easily absorbed into a blood stream, for instance. Digestion is a form of catabolism: a breakdown of large food molecules to smaller ones.</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;In mammals, food enters the mouth, being chewed by teeth, with chemical processing beginning with chemicals in the saliva from the salivary glands. This is called mastication. Then it travels down theoesophagus into the stomach, where hydrochloric acid kills most contaminating microorganisms and begins mechanical break down of some food (e.g., denaturation of protein), and chemical alteration of some. The hydrochloric acid also has a low pH, which allows enzymes to work more efficiently. After some time (typically an hour or two in humans, 4–6 hours in dogs, somewhat shorter duration in house cats, ...), the resulting thick liquid is called chyme. Chyme will go through the small intestine, where 95% of absorption of nutrients occurs, through the large intestine with waste material eventually being eliminated during defecation.</br>Other organisms use different mechanisms to digest food.</p>';
						echo "<center><h1>Digestive systems</h1></center></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Digestive systems take many, many forms. There is a fundamental distinction between internal and external digestion. External digestion was the first to evolve, and most fungi still rely on it. In this process, enzymes are secreted into the environment surrounding the organism, where they break down an organic material, and some of the products diffuse back to the organism. Later, animalsevolved by rolling into a tube and acquiring internal digestion, which is more efficient because more of the broken down products can be captured, and the chemical environment can be more efficiently controlled.</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Some organisms, including nearly all spiders, simply secrete biotoxins and digestive chemicals (e.g., enzymes) into the extracellular environment prior to ingestion of the consequent "soup". In others, once potential nutrients or food is inside the organism, digestion can be conducted to a vesicle or a sac-like structure, through a tube, or through several specialized organs aimed at making the absorption of nutrients more efficient.</p>';
						echo "<h1>Gastrovascular cavity</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The gastrovascular cavity functions as a stomach in both digestion and the distribution of nutrients to all parts of the body. Extracellular digestion takes place within this central cavity which is lined with the gastrodermis, the internal layer of epithelium. This cavity has only one opening to the outside that functions as both a mouth and an anus: waste and undigested matter is excreted through the mouth/anus, which can be described as an incomplete gut.</p>';						echo '<img src="images/gastroact1.jpg" width="254" height="154" />';
						echo '<img src="images/label.jpg" width="154" height="254" /></br>';
						echo '<img src="images/gastroact2.jpg" width="254" height="154" />Medusa (left) and polyp (right)</br>';
						echo "<h1>Overview of vertebrate digestion</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;In most vertebrates, digestion is a multi-stage process in the digestive system, starting from ingestion of raw materials, most often other organisms. Ingestion usually involves some type of mechanical and chemical processing. Digestion is separated into four steps:</p>';
						echo '<ol>
  <li><a href="http://en.wikipedia.org/wiki/Ingestion" title="Ingestion">Ingestion</a>: placing  food into the mouth (entry of food in the digestive system),</li>
  <li>Mechanical and chemical breakdown: mastication  and the mixing of the resulting&nbsp;<a href="http://en.wikipedia.org/wiki/Bolus_(digestion)" title="Bolus (digestion)">bolus</a>&nbsp;with water,&nbsp;<a href="http://en.wikipedia.org/wiki/Acid" title="Acid">acids</a>,&nbsp;<a href="http://en.wikipedia.org/wiki/Bile" title="Bile">bile</a>&nbsp;and&nbsp;<a href="http://en.wikipedia.org/wiki/Enzyme" title="Enzyme">enzymes</a>&nbsp;in the stomach  and intestine to break down complex molecules into simple structures,</li>
  <li>Absorption: of nutrients from the digestive  system to the circulatory and lymphatic capillaries through&nbsp;<a href="http://en.wikipedia.org/wiki/Osmosis" title="Osmosis">osmosis</a>,&nbsp;<a href="http://en.wikipedia.org/wiki/Active_transport" title="Active transport">active transport</a>, and&nbsp;<a href="http://en.wikipedia.org/wiki/Diffusion" title="Diffusion">diffusion</a>, and</li>
  <li>Egestion (Excretion): Removal of undigested  materials from the digestive tract through&nbsp;<a href="http://en.wikipedia.org/wiki/Defecation" title="Defecation">defecation</a>.</li>
</ol>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Underlying the process is muscle movement throughout the system through swallowing and peristalsis. Each step in digestion requires energy, and thus imposes an "overhead charge" on the energy made available from absorbed substances. Differences in that overhead cost are important influences on lifestyle, behavior, and even physical structures. Examples may be seen in humans, who differ considerably from other hominids (lack of hair, smaller jaws and musculature, different dentition, length of intestines, cooking, etc.).</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The major part of digestion takes place in the small intestine. The large intestine primarily serves as a site for fermentation of indigestible matter by gut bacteria and for resorption of water from digesta before excretion.</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;In mammals, preparation for digestion begins with the cephalic phase in which saliva is produced in the mouth and digestive enzymes are produced in the stomach. Mechanical and chemical digestion begin in the mouth where food is chewed, and mixed with saliva to begin enzymatic processing of starches. The stomach continues to break food down mechanically and chemically through churning and mixing with both acids and enzymes. Absorption occurs in the stomach and gastrointestinal tract, and the process finishes with defecation.</p>';
						echo "<h1>Human digestion process</h1></br>";
						echo '<img src="images/humandigestion.jpg" width="344" height="475" title="Humans Digestion Process"/>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;The whole digestive system is around 9 meters long. In a healthy human adult this process can take between 24 and 72 hours. Fooddigestion physiology varies between individuals and upon other factors such as the characteristics of the food and size of the meal.</p>';
						echo "<h1>Phases of gastric secretion</h1>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;<li><strong>Cephalic</strong> phase - This phase occurs before food enters the stomach and involves preparation of the body for eating and digestion. Sight and thought stimulate the cerebral cortex. Taste and smell stimulus is sent to the hypothalamus and medulla oblongata. After this it is routed through the vagus nerve and release of acetylcholine. Gastric secretion at this phase rises to 40% of maximum rate. Acidity in the stomach is not buffered by food at this point and thus acts to inhibit parietal (secretes acid) and G cell (secretes gastrin) activity via D cell secretion of somatostatin.</li></p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;<li>	Gastric phase - This phase takes 3 to 4 hours. It is stimulated by distension of the stomach, presence of food in stomach and decrease in pH. Distention activates long and myenteric reflexes. This activates the release of acetylcholine which stimulates the release of more gastric juices. As protein enters the stomach, it binds to hydrogen ions, which raises the pH of the stomach. Inhibition of gastrin and gastric acid secretion is lifted. This triggers G cells to release gastrin, which in turn stimulates parietal cells to secrete gastric acid. Gastric acid is about 0.5% hydrochloric acid (HCl), which lowers the pH to the desired pH of 1-3. Acid release is also triggered by acetylcholine and histamine.</li></p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;<li>	Intestinal phase - This phase has 2 parts, the excitatory and the inhibitory. Partially digested food fills the duodenum. This triggers intestinal gastrin to be released. Enterogastric reflex inhibits vagal nuclei, activating sympathetic fibers causing the pyloric sphincterto tighten to prevent more food from entering, and inhibits local reflexes.</li></p>';
						echo "<h1>Oral cavity</h1></br>";
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;In humans, digestion begins in the oral cavity where food is chewed. Saliva is secreted in large amounts (1-1.5 litres/day) by three pairs of exocrine salivary glands (parotid, submandibular, and sublingual) in the oral cavity, and is mixed with the chewed food by the tongue. The saliva serves to clean the oral cavity and moisten the food, and contains digestive enzymes such as salivary amylase, which aids in the chemical breakdown of polysaccharides such as starch into disaccharides such as maltose. It also contains mucus, a glycoproteinwhich helps soften the food and form it into a bolus. An additional enzyme, lingual lipase, hydrolyzes long-chain triglycerides into partial glycerides and free fatty acids.</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;Swallowing transports the chewed food into the esophagus, passing through the oropharynx and hypopharynx. The mechanism for swallowing is coordinated by the swallowing center in the medulla oblongata and pons. The reflex is initiated by touch receptors in the pharynx as the bolus of food is pushed to the back of the mouth.</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
						echo '<p align="justify">&nbsp;&nbsp;&nbsp;</p>';
						
					}
					elseif(isset($_GET['inorganic'])){
						echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="320" height="240" id="FLVPlayer">
  <param name="movie" value="FLVPlayer_Progressive.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="scale" value="noscale" />
  <param name="salign" value="lt" />
  <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/inorganic_%26_organic_compounds&amp;autoPlay=false&amp;autoRewind=false" />
  <param name="swfversion" value="8,0,0,0" />
  
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="320" height="240">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="scale" value="noscale" />
    <param name="salign" value="lt" />
    <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/inorganic_%26_organic_compounds&amp;autoPlay=false&amp;autoRewind=false" />
    <param name="swfversion" value="8,0,0,0" />
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>';
					}
					elseif(isset($_GET['organic'])){
						echo "Organic Compound";
						echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="400" height="226" id="FLVPlayer">
  <param name="movie" value="FLVPlayer_Progressive.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="scale" value="noscale" />
  <param name="salign" value="lt" />
  <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/organic_compounds&amp;autoPlay=false&amp;autoRewind=false" />
  <param name="swfversion" value="8,0,0,0" />
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="400" height="226">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="scale" value="noscale" />
    <param name="salign" value="lt" />
    <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/organic_compounds&amp;autoPlay=false&amp;autoRewind=false" />
    <param name="swfversion" value="8,0,0,0" />
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object><script type="text/javascript">
swfobject.registerObject("FLVPlayer");
</script>';
					}
					elseif(isset($_GET['humanrep'])){
						echo "<h1>Female Reproductive System</h1></br>";
						echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="320" height="214" id="FLVPlayer">
  <param name="movie" value="FLVPlayer_Progressive.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="scale" value="noscale" />
  <param name="salign" value="lt" />
  <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/female_reproductive_model_-_external_genitalia.avi&amp;autoPlay=false&amp;autoRewind=false" />
  <param name="swfversion" value="8,0,0,0" />
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="320" height="214">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="scale" value="noscale" />
    <param name="salign" value="lt" />
    <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/female_reproductive_model_-_external_genitalia.avi&amp;autoPlay=false&amp;autoRewind=false" />
    <param name="swfversion" value="8,0,0,0" />
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object><script type="text/javascript">
swfobject.registerObject("FLVPlayer");
</script>';echo "</br>";
echo "<h1>Male Reproductive System</h1></br>";
echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="320" height="214" id="FLVPlayer">
  <param name="movie" value="FLVPlayer_Progressive.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="scale" value="noscale" />
  <param name="salign" value="lt" />
  <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/male_reproductive_model_-_plaque_model_-_external_genitalia.avi&amp;autoPlay=false&amp;autoRewind=false" />
  <param name="swfversion" value="8,0,0,0" />
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="320" height="214">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="scale" value="noscale" />
    <param name="salign" value="lt" />
    <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=data/video/male_reproductive_model_-_plaque_model_-_external_genitalia.avi&amp;autoPlay=false&amp;autoRewind=false" />
    <param name="swfversion" value="8,0,0,0" />
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object><script type="text/javascript">
swfobject.registerObject("FLVPlayer");
</script>';
					}
					elseif(isset($_GET['bio2'])){
						
						echo "<h3><a href='#'>Chapter 9: &nbsp;Animals: Their Organ Systems and Functions</a></h3>";
					echo "<ol><li><a href='tutorial.php?is'>Integumentary System</a></li>";
					echo "<li><a href='index.php?ss'>Skeletal System</a></li>";
					echo "<li><a href='index.php?ms'>Muscular System</a></li>";
					echo "<li><a href='index.php?ds'>Digestive System</a></li>";
					echo "<li><a href='index.php?cirulatory'>Circulatory System</a></li>";
					echo "<li><a href='index.php?rs'>Respiratory System</a></li>";
					echo "<li><a href='index.php?excretory'>Excretory System</a></li>";
					echo "<li><a href='index.php?nervous'>The Nervous System</a></li>";
					echo "<li><a href='index.php?endocrine'>The Endocrine System</a></li>";
					echo "<li><a href='index.php?humanrep'>The Human Reproductive System</a></li></ol>";
					echo "<h3><a href='#'>Chapter 10: &nbsp;Reproduction System</a></h3>";
					echo "<ol><li><a href='index.php?typesofrep'>Types of Reproduction</a></li>";
					echo "<li><a href='index.php?vp'>Vegetative Propagation</a></li>";
					echo "<li><a href='index.php?spf'>Sexual Reproduction in a Flower</a></li></ol>";
					echo "<h3><a href='#'>Chapter 11: &nbsp;Genetics</a></h3>";
					echo "<ul><li><a href='index.php?tpi'>The Principles of Inheritance</a></li></ul>";
					echo "<h3><a href='#'>Chapter 12: &nbsp;Taxonomy</a></h3>";
					echo "<ol><li><a href='index.php?esc'>Early Systems of Classification</a></li>";
					echo "<li><a href='index.php?clt'>Classification of Living Things</a></li></ol>";
					echo "<h3><a href='#'>Chapter 13: &nbsp;Ecology: Interactionin the Biosphere</a></h3>";
					echo "<ol><li><a href='index.phpecosystem'>Characteristics of an Ecosystems</a></li>";
					echo "<li><a href='index.php?bep'>Biomass and the Energy Pyramid</a></li>";
					echo "<li><a href='index.php?ep'>Environmental Problems</a></li>";
					echo "<li><a href='index.php?ce'>Causes and Effects</a></li>";
					echo "<li><a href='index.php?er'>Ecological Relationships</a></li></ol>";
					echo "<h3><a href='#'>Chapter 14: &nbsp;The Proccess of Evolution</a></h3>";
					echo "<ol><li><a href='#'>Theories of Evolution</a></li>";
					echo "<li><a href='index.php?modernsynthesis'>Modern Synthesis</a></li>";
					echo "<li><a href='index.php?biochemistry'>Biochemistry Changes Evolution</a></li></ol>";
					echo "<p style='font-size:15px'><a href='index.php'>Previous</a></p>";
						
					}
					else{
					
					echo "<h3><a href='index.php?pioneers'>Biology Pioneers</a></h3>";
					echo "<h3><a href=''>Famous Biologist</a></h3>";
					    echo "<ul>";
						echo "<li><a href='index.php?famous=foreign'>Foreign biologist</a></li>";
						echo "<li><a href='index.php?famous=local'>Local biologist</a></li>";
						echo "</ul>";
						
					echo "<h3><a href='#'>Chapter 1: &nbsp;The Basic Nature of Science</a></h3>";
					echo "<ul>";
					echo "<li><a href='index.php?method'>The Methods of Science<a/></li>";
					echo "<li><a href='index.php?history'>History of Biology</a></li>";
					echo "<li><a href='index.php?thescienceoflife'>Biology: The Science of Life</a></li>";
					echo "<li><a href='index.php?tools'>Tools in the Study of Biology</a></li><li><a href='tutorial.php?branches'>Branches of Biology</a></li></ul>";
					echo "<h3><a href='#'>Chapter 2: &nbsp;Characters of Life</a></h3>";
					echo "<ul>";
					echo "<li><a href='index.php?characteristics'>Characteristics of Living Things</a></li>";
					echo "</ul>";
					echo "<h3><a href='#'>Chapter 3: &nbsp;Chemical Compounds: The Units of Life</a></h3>";
					echo "<ul><li><a href='index.php?atoms-and-molecules'>Atoms and Molecules</a></li>";
					echo "<li><a href='index.php?inorganic'>Water, an Inorganic Compound</a></li>";
					echo "<li><a href='index.php?organic'>Organic Compounds</a></li></ul>";
					echo "<h3><a href='#'>Chapter 4: &nbsp;Cells: The Building Blocks of Organisms</a></h3>";
					echo "<ul>";
					echo "<li><a href='index.php?celltheory'>Cell Theory</a></li></ul>";
					echo "<h3><a href='#'>Chapter 5: &nbsp;Homeostasis</a></h3>";
					echo "<ul><li><a href='index.php?transport'>Transport of Materials Through the Cell Membrane</a></li>";
					echo "<li><a href='index.php?passive'>Passive Transport</a></li>";
					echo "<li><a href='index.php?active'>Active Transport</a></li></ul>";
					echo "<h3><a href='#'>Chapter 6: &nbsp;Cell Processes</a></h3>";
					echo "<ul><li><a href='index.php?photosynthesis'>Photosynthesis</a></li></ul>";
					echo "<h3><a href='#'>Chapter 7: &nbsp;Plant and Animal Tissue</a></h3>";
					echo "<ul><li><a href='index.php?classification'>Classification of Tissues</a></li></ul>";
					echo "<h3><a href='#'>Chapter 8: &nbsp;Plant Organs</a></h3>";
					echo "<ul><li><a href='index.php?root'>The Roots and Roots Systems</a></li></ul>";
					echo "<p align='right'><a href='index.php?bio2'>Next</a></p>";	
						
					}
					?></p>
        
		</div>
        
        <div id="content_right">
        <h5><?php 
		include 'studnav.php';
			?><br/><br/><br/>
        <br/><br/><br/>
<p></p>
          <div class="item_box">
            <p>&nbsp;</p>
            <p><br/>
              <a href="http://www.facebook.com/pages/Golden-Achievers-Academy/232715393412055" title="Like us on Facebook" target="_new"><img src="../images/facebook.jpg" height="30px" width="90px"/></a></p>
            <p>&nbsp;</p>
            <p><br/>
              <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="210" height="300" id="tech" align="middle">
                <param name="allowScriptAccess" value="sameDomain" />
                <param name="movie" value="kl.swf" />
                <param name="quality" value="high" />
                <embed src="../kl.swf" quality="high" width="210" height="300" name="tech" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />        
              </object>
            </p>
          </div>
        </div>
	<div class="spacer"></div>
	</div>
    
   		<div id="footer">
        	<div style="float:left; padding-left:40px;">
		Copyright 2007 &copy; Golden Achievers Academy
        	</div>
        <div id="madeby"><br />
</div>
		</div> 
    
	
</div>

</body>
</html>
