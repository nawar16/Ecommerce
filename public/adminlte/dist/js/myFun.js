function check_all(){
    //class="item_checkbox" btn check file
    //class="check_all" datatable
    $('input[class="item_checkbox"]:checkbox').each(function(){
      if($('input[class="check_all"]:checkbox:checked').length == 0)
      {
        $(this).prop('checked',false);
      }else{
       $(this).prop('checked',true);
      }
    });
}


function delete_all(){
  $(document).on('click','.del_all',function(){
    $('#form_data').submit();
  });
  $(document).on('click','.delBtn',function(){
    var item_checked = $('input[class="item_checkbox"]:checkbox').filter(":checked").length;
    if(item_checked > 0)
    {
      $('.record_count').text(item_checked);
      $('.not_empty_record').show();
      $('.empty_record').hide();
    }else{
      $('.record_count').text('');
      $('.not_empty_record').hide();
      $('.empty_record').show();
    }
    $('#mutlipleDelete').modal('show');

  });
  
}