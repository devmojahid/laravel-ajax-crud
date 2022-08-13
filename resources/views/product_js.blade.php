<script src="{{asset('main')}}/js/jquery.min.js"></script>
<script src="{{asset('main')}}/js/bootstrap.bundle.min.js"></script>

<script>
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
</script>
<script>
  $(document).ready(function(){
    $(document).on('click','.add_product',function(e){
        e.preventDefault();
        let name = $('#name').val();
        let price = $('#price').val();
       
        $.ajax({
            url:"{{route('add.product')}}",
            method:'post',
            data:{name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#productModal').modal('hide');
                    $('#addproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })


    // Product Update Show 
    $(document).on('click','.update_product_form',function(){
        let id = $(this).data('id');
        let name = $(this).data('name');
        let price = $(this).data('price');

        $("#up_id").val(id);
        $("#up_name").val(name);
        $("#up_price").val(price);
    })

    // Update Logic
    $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let id = $('#up_id').val();
        let name = $('#up_name').val();
        let price = $('#up_price').val();
       
        $.ajax({
            url:"{{route('update.product')}}",
            method:'post',
            data:{id:id,name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })

    // Update Logic
    $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let id = $('#up_id').val();
        let name = $('#up_name').val();
        let price = $('#up_price').val();
       
        $.ajax({
            url:"{{route('update.product')}}",
            method:'post',
            data:{id:id,name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })

    // Update Logic
    $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let id = $('#up_id').val();
        let name = $('#up_name').val();
        let price = $('#up_price').val();
       
        $.ajax({
            url:"{{route('update.product')}}",
            method:'post',
            data:{id:id,name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })

    // Update Logic
    $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let id = $('#up_id').val();
        let name = $('#up_name').val();
        let price = $('#up_price').val();
       
        $.ajax({
            url:"{{route('update.product')}}",
            method:'post',
            data:{id:id,name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })

    // Update Logic
    $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let id = $('#up_id').val();
        let name = $('#up_name').val();
        let price = $('#up_price').val();
       
        $.ajax({
            url:"{{route('update.product')}}",
            method:'post',
            data:{id:id,name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })

    // Update Logic
    $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let id = $('#up_id').val();
        let name = $('#up_name').val();
        let price = $('#up_price').val();
       
        $.ajax({
            url:"{{route('update.product')}}",
            method:'post',
            data:{id:id,name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })

    // Update Logic
    $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let id = $('#up_id').val();
        let name = $('#up_name').val();
        let price = $('#up_price').val();
       
        $.ajax({
            url:"{{route('update.product')}}",
            method:'post',
            data:{id:id,name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })

    // Update Logic
    $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let id = $('#up_id').val();
        let name = $('#up_name').val();
        let price = $('#up_price').val();
       
        $.ajax({
            url:"{{route('update.product')}}",
            method:'post',
            data:{id:id,name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })

    // Update Logic
    $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let id = $('#up_id').val();
        let name = $('#up_name').val();
        let price = $('#up_price').val();
       
        $.ajax({
            url:"{{route('update.product')}}",
            method:'post',
            data:{id:id,name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })

    // Update Logic
    $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let id = $('#up_id').val();
        let name = $('#up_name').val();
        let price = $('#up_price').val();
       
        $.ajax({
            url:"{{route('update.product')}}",
            method:'post',
            data:{id:id,name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })

    // Update Logic
    $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let id = $('#up_id').val();
        let name = $('#up_name').val();
        let price = $('#up_price').val();
       
        $.ajax({
            url:"{{route('update.product')}}",
            method:'post',
            data:{id:id,name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })

    // Update Logic
    $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let id = $('#up_id').val();
        let name = $('#up_name').val();
        let price = $('#up_price').val();
       
        $.ajax({
            url:"{{route('update.product')}}",
            method:'post',
            data:{id:id,name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })

    // Delete Logic
    $(document).on('click','.product_delete',function(e){
        e.preventDefault();
        let id = $(this).data('id');
        if(confirm("Are You Delete THe Product")){
                $.ajax({
                url:"{{route('delete.product')}}",
                method:'post',
                data:{id:id},
                success:function(res){
                if(res.status=='success'){
                    $('.table').load(location.href+' .table');

                }
            }
            })
        }
       
       
    })

    // Update Logic
    $(document).on('click','.up_product',function(e){
        e.preventDefault();
        let id = $('#up_id').val();
        let name = $('#up_name').val();
        let price = $('#up_price').val();
       
        $.ajax({
            url:"{{route('update.product')}}",
            method:'post',
            data:{id:id,name:name,price:price},
            success:function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateproductform')[0].reset();
                    $('.table').load(location.href+' .table');

                }
            },
            error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,values){
                    $('.errMsgCOntainer').append("<span class='text-danger'>"+values+"</span>"+"</br>")
                })
            }
        })
    })


  });
</script>