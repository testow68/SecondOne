<body>
<section1>
            <article>
                <h1>TREŚĆ ARTYKUŁU 1</h1>
                <div id="wrap">
                    <img class="fake" src="01.jpg" />
                    <div id="img_wrap">
                        <img class="normal" src="01.jpg" />
                    </div>
                </div>
                <br>
                <?php
                $tekst="Brakował mu cal — może dwa — do sześciu stóp wzrostu, był potężnie zbudowany, a gdy szedł prosto na kogoś z pochylonemi nieco plecami i wysuniętą głową, patrząc nieruchomo spodełba, przypominał nacierającego byka. Głos miał głęboki, głośny; z zachowania jego przebijała jakby uparta pewność siebie, w której nie było wcale zadzierzystości. Zdawało się że ta pewność siebie jest nieunikniona, że się przejawia nietylko w stosunku do innych, ale i do niego samego. Był nieskazitelnie czysty, przybrany w niepokalaną biel od trzewików aż do kapelusza, i w przeróżnych wschodnich portach, gdzie zarabiał na życie jako subjekt okrętowego dostawcy, bardzo był popularny.  Taki subjekt nie potrzebuje zdawać egzaminów z żadnego przedmiotu, ale musi posiadać zdolność kombinowania i wykazywać ją w czynie. Praca jego polega na ściganiu się łódką — żaglową, parową lub poruszaną zapomocą wioseł — z innymi subjektami; chodzi o to aby wyprzedzić wszystkich, dopaść okrętu nim go zakotwiczą, przywitać się wesoło z kapitanem, wetknąć mu kartę — anons dostawcy okrętowego — gdy zaś kapitan pierwszy raz na brzeg wysiądzie, zaprowadzić go niepostrzeżenie lecz stanowczo do obszernego sklepu, przypominającego jaskinię pełną produktów, które się jada i pija na okręcie; można się tam zaopatrzyć we wszystko co czyni statek pięknym i zdolnym do podróży, zarówno w komplet haków linowych jak i książeczkę z pozłotą do rzeźbionych ozdób steru; a w sklepie tym dostawca okrętowy wita po bratersku szypra, choć go nigdy przedtem nie widział.";

                ?>
                <a id="zawa">
                <?php
                $tek=substr($tekst, 0, 266);
                echo $tek . "<br>";
                ?>
                </a>
                 <a id="zawa1">
                <?php
                $tek=substr($tekst, 267, 2500);
                echo $tek;
                ?>
                </a>
                <br /><br />
                <div id="more" class="back">Więcej</div>
                <div id="less" class="back">Mniej</div>
					<script type="text/javascript">
			$(function(){
				
				$('#more').click(function(){
						
						$('#zawa1').slideDown(800);
						$('#more').slideUp('fast');
						$('#more').toggle();
						$('#less').toggle();
						
						
					});
					$('#less').click(function(){
								$('#zawa1').slideUp(800);
								
								$('#less').toggle();
								$('#more').toggle();
							
						
						
					});
						
					});
					</script>
            </article>
            <article>
                <h1>TREŚĆ ARTYKUŁU 2</h1>
                <?php
                include "tekst.txt";
                ?>
            </article>
            <article>
                <h1>TREŚĆ ARTYKUŁU 5</h1>
                <?php
                include "tekst.txt";
                ?>
            </article>
           </section1>
            <section1>
            <article>
                <h1>TREŚĆ ARTYKUŁU 3</h1>
                <?php
                include "tekst.txt";
                ?>
            </article>
            <article>
                <h1>TREŚĆ ARTYKUŁU 4</h1>
                <?php
                include "tekst.txt";
                ?>
            </article>
            <article>
                <h1>TREŚĆ ARTYKUŁU 6</h1>
                <?php
                include "tekst.txt";
                ?>
            </article>
            </section1>  
</body>