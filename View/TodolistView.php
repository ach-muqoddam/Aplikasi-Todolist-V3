<?php 

namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView
    {
        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService) {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void 
        {
            while(true){
                $this->todolistService->showTodoList();
        
                echo "MENU" . PHP_EOL;
        
                echo "1. Tambah" . PHP_EOL;
                echo "2. Hapus" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;
        
                $pilihan = InputHelper::input("pilih");
        
                if ($pilihan == "1") {
                    $this->addTodolist();
                } else if ($pilihan == "2") {
                   $this->removeTodolist();
                }else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan tidak mengerti" . PHP_EOL;
                }
            }

            echo "Sampai Jumpa Lagi!!!" . PHP_EOL;
        }

        function addTodolist(): void 
        {
            echo "MENAMBAH TODO" . PHP_EOL;
    
            $todo = InputHelper::input("Todo (x untuk batal)");

            if ($todo == "x") {
            echo "Batal menambah Todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodoList($todo);
            }
        }

        function removeTodolist(): void 
        {
            
            echo "MENGHAPUS TODO" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk membatalkan)");

            // cek jika ingin batalkan
            if ($pilihan == "x") {
                echo "batal menghapus todo" . PHP_EOL;
            } else {   
                // cek berhasil atau gagal saat dihapus
                $this->todolistService->removeTodolist($pilihan);
            }

        }
    }

}