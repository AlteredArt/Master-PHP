  <?php 

  class Document {
      public function setPrinter($printer) {
          $this -> printer = $printer;
      }

      public function print() {
          $this -> printer -> print();
      }
  }

  $document = new Document();
  $printer = new class {
    public function print() {
        echo 'printing..';
    }
  };
  $document -> setPrinter ($printer); 
  $document -> print();