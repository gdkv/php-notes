<?php
    namespace Controller;

    use \Core\AbstractController;

    class NoteController extends AbstractController
    {
        public function list()
        {
            $this->render('note/list', []);
        }

        public function detail($id)
        {

        }

        public function add($request)
        {

        }

        public function edit($request)
        {

        }

    }
