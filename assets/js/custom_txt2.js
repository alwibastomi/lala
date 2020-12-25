      function success_data(){
        $(".tst3").ready(function(){
         $.toast({
          heading: 'SPAS',
          text: 'Tambah Data Berhasil Disimpan.',
          position: 'top-right',
          loaderBg:'#ff6849',
          icon: 'success',
          hideAfter: 3500, 
          stack: 6
        });
       });
      }

      function success_update(){
        $(".tst3").ready(function(){
         $.toast({
          heading: 'SPAS',
          text: 'Update Data Berhasil Disimpan.',
          position: 'top-right',
          loaderBg:'#ff6849',
          icon: 'warning',
          hideAfter: 3500, 
          stack: 6
        });
       });
      }