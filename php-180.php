<?php

$a = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis fringilla lorem suscipit dapibus. Etiam at ultricies metus, ut congue lorem. Sed ornare tincidunt mi eget feugiat. Sed ut massa nec ipsum pretium venenatis ac ac est. Quisque at nulla a metus maximus aliquam sed at nunc. Nunc sit amet arcu arcu. Quisque commodo pharetra nibh at laoreet. Mauris ex diam, gravida id orci non, volutpat mollis nisl. Pellentesque sodales, elit ut convallis pellentesque, diam magna sagittis ligula, luctus varius odio ante id est. Donec augue dolor, venenatis id mauris at, venenatis mollis diam. Fusce ac orci pretium, semper tortor eu, semper arcu. Sed quis nibh venenatis, lobortis orci sed, tincidunt est. Vestibulum id pretium metus, at pharetra nunc.

Praesent mi ante, consequat eget ullamcorper eget, placerat sed orci. Sed dapibus dictum massa at ultrices. Nam felis sem, sagittis et mattis non, consequat eget arcu. Nulla fringilla lectus elit, sed lobortis ipsum rutrum eu. Curabitur interdum dignissim eros, sit amet placerat urna. Curabitur a purus mollis ex tincidunt venenatis vitae et tellus. Sed pellentesque a quam ac iaculis.

Proin a dui vestibulum, dignissim purus at, dictum quam. Suspendisse ut lorem congue, scelerisque ligula eu, efficitur eros. Sed a nisl sed nulla posuere tincidunt id nec lacus. Aenean accumsan, orci eu commodo mollis, purus orci gravida augue, sit amet placerat dolor augue vitae dui. Ut rhoncus, ligula id gravida vulputate, purus risus tincidunt erat, quis tempus ipsum magna id sem. Maecenas bibendum, leo vel posuere tristique, nisi elit vehicula arcu, pellentesque suscipit lacus massa quis libero. Vivamus ultrices nulla tellus, vel facilisis dolor iaculis et. Suspendisse cursus ornare condimentum. Aliquam vel nulla et lorem imperdiet eleifend non non nulla.

Praesent euismod lectus ut nisi viverra condimentum sed quis magna. Vestibulum sodales felis nec finibus laoreet. Sed sollicitudin, nibh vitae egestas aliquam.";

$link = '"www.net"';

$b = substr($a, 0, 180);
$b = rtrim($b, "!,.-");
$b = substr($b, 0, strrpos($b, ' '));
$b = nl2br($b);

$text_arr = explode(" ", $b);
$text_arr = array_slice($text_arr, -2, 2);
$text = implode(" ", $text_arr)."...";

$b_arr = explode(" ", $b);
$b_arr = array_slice($b_arr, 0, -2);
$b = implode(" ", $b_arr);

?>

<p><?php echo $b ?></p><a href=<?php echo $link ?>><?php echo $text ?></a>
