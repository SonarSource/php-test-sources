<?php

use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

return [
    [
        '1.13290930735019+0.187055234944717j',
        '12.34+5.67j',
    ],
    [
        ExcelError::NAN(),
        'Invalid Complex Number',
    ],
    [
        '9.83122969386706+0.682188176920927i',
        '-12.34E-5+6.78E9i',
    ],
    [
        '0.633585864201507+0.269370929165668i',
        '3.5+2.5i',
    ],
    [
        '0.561107939136413+0.120864006221476i',
        '3.5+i',
    ],
    [
        '0.544068044350276',
        '3.5',
    ],
    [
        '0.561107939136413-0.120864006221476i',
        '3.5-i',
    ],
    [
        '0.633585864201507-0.269370929165668i',
        '3.5-2.5i',
    ],
    [
        '0.430169003285497+0.516936357012023i',
        '1+2.5i',
    ],
    [
        '0.150514997831991+0.34109408846046i',
        '1+i',
    ],
    [
        '0',
        '1',
    ],
    [
        '0.150514997831991-0.34109408846046i',
        '1-i',
    ],
    [
        '0.430169003285497-0.516936357012023i',
        '1-2.5i',
    ],
    [
        '0.397940008672038+0.68218817692092i',
        '2.5i',
    ],
    [
        '0.68218817692092i',
        'i',
    ],
    [
        ExcelError::NAN(),
        '0',
    ],
    [
        '-0.68218817692092i',
        '-i',
    ],
    [
        '0.397940008672038-0.68218817692092i',
        '-2.5i',
    ],
    [
        '0.430169003285497+0.847439996829817i',
        '-1+2.5i',
    ],
    [
        '0.150514997831991+1.02328226538138i',
        '-1+i',
    ],
    [
        '1.36437635384184i',
        '-1',
    ],
    [
        '0.150514997831991-1.02328226538138i',
        '-1-i',
    ],
    [
        '0.430169003285497-0.847439996829817i',
        '-1-2.5i',
    ],
    [
        '0.633585864201507+1.09500542467617i',
        '-3.5+2.5i',
    ],
    [
        '0.561107939136413+1.24351234762036i',
        '-3.5+i',
    ],
    [
        '0.544068044350276+1.36437635384184i',
        '-3.5',
    ],
    [
        '0.561107939136413-1.24351234762036i',
        '-3.5-i',
    ],
    [
        '0.633585864201507-1.09500542467617i',
        '-3.5-2.5i',
    ],
];
