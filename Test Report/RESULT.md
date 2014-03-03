TEST RESULT
===========

RIPS
-----------

#### INFORMATION

ver. 0.54 

http://rips-scanner.sourceforge.net/

verbosity level: "4. untainted +1,2,3"

#### TEST

| Unit      |  Series 1  |  Series 2 |  Series 3 |  Series 4 |  OTHER  |
|-----------|------------|-----------|-----------|-----------|---------|
|XSS        |(+16,-0)/16 |(+0,-3) /3 |(+1,-0) /1 |(+1,-0) /1 |         |
|SQL inject.|(+4,-2) /8  |(+0,-5) /3 |(+1,-2) /2 |(+1,-2) /2 |         |
|CMD inject.|(+12,-0)/12 |(+0,-6) /6 |(+6,-0) /6 |(+3,-0) /3 | +3      |

#### TOTAL:1.58
  * XSS: +1 -1 +1 +1 = +2
  * SQL: +0.25 -1.67 -0.5 -0.5 = -2.42
  * CMD: +1 -1 +1 +1 = +2