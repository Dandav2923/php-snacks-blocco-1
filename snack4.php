<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->




<?php 
$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit impedit ipsa earum minima repellendus dolor accusamus sunt reprehenderit corporis. Nulla neque unde hic deleniti animi! Qui eligendi autem illum ullam.
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem soluta debitis molestiae voluptatum nisi facere commodi maxime est doloremque. Temporibus inventore modi ab officiis tempore vero error sunt alias odio!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolorum perspiciatis labore illo! Facilis, saepe earum quisquam non repellendus reiciendis. Ad esse, amet ipsam corrupti in hic sit recusandae sint.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam repudiandae alias deserunt id ducimus porro, atque eos hic culpa quod minima ex adipisci illo vitae magni asperiores unde numquam. Quos?Lorem ipsum dolor sit amet consectetur adipisicing elit. At accusantium aperiam, non illum adipisci assumenda quos, architecto nostrum sunt fugit reiciendis omnis aliquam numquam, odio doloribus distinctio voluptas tenetur ab.';

$keywords = preg_split('/[\.]+/', $paragraph);
print_r($keywords);

?>