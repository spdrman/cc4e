<?php

use \Tsugi\Core\LTIX;
use \Tsugi\Util\LTI;
use \Tsugi\Util\PDOX;
use \Tsugi\Util\U;
use \Tsugi\Util\Mersenne_Twister;

// Called first
function ccauto_instructions($LAUNCH) { return <<< EOF
<b>Exercise cc-2-1:</b> Write a C program to produce the same output as
this Python program:
<pre>
print('Hello world')
print('Answer', 42)
print('Name', 'Sarah')
print('x',3.5,'i',10)
</pre>
EOF
;
}

function ccauto_main($LAUNCH) { return false; }

function ccauto_input($LAUNCH) { return false; }

function ccauto_sample($LAUNCH) {  return <<< EOF
#include <stdio.h>
int main() {
    printf("Hello world\\n");
}
EOF
;
} 

function ccauto_solution($LAUNCH) { return <<< EOF
#include <stdio.h>
int main() {
    printf("Hello world\\n");
    printf("Answer %d\\n", 42);
    printf("Name %s\\n", "Sarah");
    printf("x %.1f i %d\\n", 3.5, 100);
}
EOF
;
}

function ccauto_output($LAUNCH) { return <<< EOF
Hello world
Answer 42
Name Sarah
x 3.5 i 100
EOF
;
}

function ccauto_prohibit($LAUNCH) { return false; }
function ccauto_require($LAUNCH) { return false; }

