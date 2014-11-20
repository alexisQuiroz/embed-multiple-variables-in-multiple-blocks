Embed-multiple-variables-in-multiple-blocks PHPWORD
===========================================

method for analyzing an array of variables within a block and retain the block to insert another arrangement of variables. insert different variables in different blocks, multiple variables in multiple blocks.  

metodo para analizar un arreglo de variables dentro de un bloque y conservar el bloque para insertar otro arreglo de variables. insertar diferentes variables en diferentes bloques, multiples variables en multiples bloques.

***************************************************************************************
TEMPLATE....
FILE : resources/Sample_TemplateBlock_MULTIPLE.docx  ----->

${CLONEME}

PHPWord ${firstName}  ${secondName} from ${address}  
${/CLONEME}
***************************************************************************************
***************************************************************************************
RESULT...
FILE .... result/Sample_TemplateBlock_MULTIPLE.docx ----->

PHPWord Alexis  Quiroz from santiago/Chile  

${CLONEME}
PHPWord ${firstName}  ${secondName} from ${address}  
${/CLONEME}
***************************************************************************************

