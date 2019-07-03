<?php

    class javahinting{

        public $formphp;
        function __construct(phphinting $value){
            $this->formphp = $value;
            $this->formphp->framework();
            $this->formphp->cms();
        }
    }

?>