<?php

// var_dump(preg_match("/T.st/","T9st"));
/*
we use preg_match for reg.
preg_match get lot of property but in the example of above we have only tow:
    pattern: will start with / and end also by /
        we use the dot for say: anything can come here and no defrint for our pattern.
    subject or out text: 
*/

// var_dump(preg_match("/t.st/i","T9st"));

// we use i at the end of our pattern for say that our pattern is not CaseSensitive 

// var_dump(preg_match("/t[abcdef]s/i","Tfs"));

// we use bracket for alot of charcter and it's rule is likev dot.



// var_dump(preg_match("/t[ab.]s/i","T.s"));

// we can use dot in bracket for say that dot can come also

// var_dump(preg_match("/t[1-9]s/i","T5s"));
// var_dump(preg_match("/t[a-z][A-Z]s/","Taws"));

// we also can use range in out preg_match

// var_dump(preg_match("/te{3}st/i","Teeest"));

// we can use Ackulat for say that can use number of charechter in subject.

// var_dump(preg_match("/te{3,7}st/i","Teeest"));
// we can use range also.



?>