<?php
    if (false) {
        //$this = new SlView(); // for IDE
    }

    echo $this->SlForm->create('Page');
    if ($this->id) {
        echo $this->SlForm->hidden('id');
    }

    echo $this->SlForm->input('title');
    echo $this->SlForm->input('content');

    echo $this->SlForm->end(__t(!$this->id ? 'Add' : 'Save'));
