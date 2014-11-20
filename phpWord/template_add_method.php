/*
     * write multi variable in mutiBlock
     * @param string $blockname
     * @param array $arraySet format array('nameOne' => 'Alexis', 'nameTwo' => 'Quiroz')
     * @return string|null 
     */

    public function writeMultiBlock($blockname, $arraySet = '') {
        $xmlBlock = null;
        preg_match('/(<\?xml.*)(<w:p.*>\${' . $blockname . '}<\/w:.*?p>)(.*)(<w:p.*\${\/' . $blockname . '}<\/w:.*?p>)/is', $this->documentXML, $matches);
        if (isset($matches[3])) {          
            $xmlBlock = $matches[3];
            $blockComplet = $matches[2] . $matches[3] . $matches[4];
            foreach($arraySet as $nameVar => $value){
                $this->setValue($nameVar, $value);
            }
            $this->documentXML = str_replace($matches[2], '', $this->documentXML);
            $this->documentXML = str_replace($matches[4], $blockComplet, $this->documentXML);
        }

        return $xmlBlock;
    }
