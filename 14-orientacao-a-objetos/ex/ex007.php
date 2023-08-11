<?php 

/*
    -Crie uma classe chamada Task que represente uma tarefa.

    -A classe Task deve ter os seguintes atributos:

    -title: título da tarefa.

    -description: descrição da tarefa.

    -completed: indica se a tarefa está concluída ou não.

    -A classe Task deve ter os seguintes métodos:

    -markAsCompleted(): marca a tarefa como concluída.

    -markAsIncomplete(): marca a tarefa como não concluída.

    -getTitle(): retorna o título da tarefa.

    -getDescription(): retorna a descrição da tarefa.

    -isCompleted(): retorna um booleano indicando se a tarefa está concluída ou não.

    Dica:

    -Lembre-se de incluir a declaração da classe com class Task.

    -Utilize uma propriedade para cada atributo da classe.

    -Os métodos markAsCompleted() e markAsIncomplete() podem simplesmente alterar o valor da propriedade completed.

    -Os métodos getTitle(), getDescription() e isCompleted() devem retornar os respectivos valores das propriedades.



*/
    class Task{
        public $title = "Fazer achocolatado";
        public $description = "Pegue o leite e despeje no copo, adicione duas colheres de chá de achocolatado, misture e beba";
        public $completed;
        public function markAsCompleted(){
            return $this->completed = true;
        }
        public function markAsIncomplete(){
            return $this->completed = false;
        }
        public function getTitle(){
          return $this->title;
        }
        public function getDescription(){
            return $this->description;
        }
        public function isCompleted(){
            if ($this->completed === true) {
                return "Tarefa concluída! <br>";
            }else{
                return 'Tarefa não concluída. <br>';
            }
        }
    }

    $copo = new Task;
    echo $copo->getTitle() . "<br>";
    echo $copo->getDescription() . "<br>";
    echo $copo->markAsIncomplete();
    echo $copo->isCompleted();
    
    ?>