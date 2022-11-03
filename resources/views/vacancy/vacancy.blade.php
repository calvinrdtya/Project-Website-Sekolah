@extends('layouts.main3')
@section('container')

<style>
    
    .navbar-brand {
        color: #FFFFFF;
        margin-left: 20%;
        font: 32px Viga;
    }
    .navbar-brand:hover {
        color: #FFFFFF;
    }

    .bottom-bar {
        width: 100%;
        padding: 15px 0;
        background: #6495ED;
        margin-bottom: -50px;
    }

  

    @media (min-width: 768px) {
        .bottom-bar {
            max-height: 90px;
        }
    }

    @media (max-width: 767.98px) {
        .bottom-bar .search,
        .bottom-bar .user {
            text-align: center;
            margin-bottom: 15px;
        }
        
        .bottom-bar .user {
            margin-bottom: 0;
        }
    }
         .button1 {
            margin-bottom: -10px;
            text-align: center;
            margin-top: 10px;
            /* border-radius: 15px; */
            width: 50%;
            padding: 0px 5px 5px 0px;
            height: 40%;
            background-color: #62ACCC;
            color: #FFFFFF;
            border: 2px solid #f1f1f1;
            transition: 0.3ms;
          }

          .button1:hover {
            background-color: #FFFFFF;
          }

            .button3 {
                margin-top: 10px;
                /* border-radius: 15px; */
                text-align: center;
                width: 100%;
                padding: 0px 5px 5px 0px;
                height: 40%;
                background-color: #62ACCC;
                color: #FFFFFF;
                border: 2px solid #f1f1f1;
                transition: 0.3ms;
            }

            .button3:hover {
                background-color: #62ACCC;
            }

            .card {
                -webkit-box-shadow: 0 0 20px #dddddd;
                box-shadow: 0 0 20px #dddddd;
                -webkit-transition: 0.3s;
                -o-transition: 0.3s;
                transition: 0.3s;
                width: 100%;
	            margin-bottom: 50px;
            }
            .card:hover {
                -webkit-box-shadow: 0 0 0;
                box-shadow: 0 0 0;
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .categori {
                margin-bottom: 40px;
            }
            .categori-judul {
                padding-top: 60px;
            }

            .category-title {
                /* margin-top: 40px; */
                font: 40px Viga;
            }

            .categori_row:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            .categori_col {
                padding-left: 10px;
                padding-right: 10px;
            }

            .categori_content {
                padding-top: 2px;
                padding-left: 18px;
            }

            .categori_content h6 {
                text-transform: uppercase;
                line-height: 18px;
                font-weight: 500;
            }

            .card-header {
                background-color: #FFFFFF;
            }

            .card-categori {
                -webkit-box-shadow: 0 0 20px #dddddd;
                box-shadow: 0 0 20px #dddddd;
                -webkit-transition: 0.3s;
                -o-transition: 0.3s;
                transition: 0.3s;
            }

            .card-categori:hover {
                -webkit-box-shadow: 0 0 0;
                box-shadow: 0 0 0;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .latest-brand1 {
                font: 18px Viga;
                color: #000000;
                text-decoration: none;
            }

            .latest-brand1:hover {
                color: #6495ED;
            }
            .latest-brand2 {
                font: 18px Viga;
                color: red;
                text-decoration: none;
            }
            .latest-brand2:hover {
                color: blue;
            }

            .latest-brand3 {
                font: 18px Viga;
                color: blue;
                text-decoration: none;
            }
            .latest-brand3:hover {
                color: #000;
            }

            .back {
                margin-top: -10px;
            }

</style>

        <section>
        <div class="loker">
            <div class="container-fluid"> 
                <!-- <a href="/home" class="btn btn-primary back"><i class="fas fa-arrow-left"></i>&nbsp; Back</a> -->
            <h1 class="category-title text-center">Lowongan Kerja</h1>
                        <div class="categori">
                            <div class="card-header">
                                <!-- <a href="/vacancy/tambah" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Input Baru</a> -->
                                <div class="card-body">
                                    <div class="container">
                                        <a href="/vacancy/tambah" class="btn btn-outline-primary ml-4">Input Siswa Baru</a>
                                        <div class="row">
                                            @foreach ($vacancy as $v)
                                                    <div class="col-sm-6">
                                                        <div class="card">
                                                            <div class="container">
                                                                <h5 class="text-bold mt-2">{{ $v->lowongan }}</h5> 
                                                                <p><i class="far fa-building"></i> {{ $v->perusahaan }}</p>
                                                                <p><i class="fas fa-university"></i> {{ $v->pendidikan }}</p>
                                                                <p><i class="fa fa-map-marker"></i> {{ $v->lokasi }}</p>
                                                            </div>
                                                            <!-- <a href="/vacancy/hapus/{{$v->id}}" class="latest-brand2 mb-3 mr-3 text-decoration-none float-right"><i class="fas fa-trash"></i></a> -->
                                                            <a href="/vacancy/hapus/{{$v->id}}" class="latest-brand2 mb-3 mr-3 text-decoration-none float-right">delete</a>
                                                            <a href="/vacancy/edit/{{$v->id}}" class="latest-brand1 mb-3 mr-3 text-decoration-none float-right">edit</a>
                                                            <a href="javascript:void(0)" id="btn-edit-post" data-id="{{ $v->id }}" class="btn btn-primary btn-sm">detail</a>
                                                            <!-- <a href="{{ $v->id }}" class="latest-brand1 mb-3 mr-3 text-decoration-none float-right" data-toggle="modal" data-target=".bd-example-modal-lg-1">detail</a> -->
                                                           
                                                        </div>
                                                    </div>
                                                @endforeach 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                      
<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT POST</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input type="hidden" id="post_id">

                <div class="form-group">
                    <label for="name" class="control-label">Title</label>
                    <input type="text" class="form-control" id="title-edit">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-title-edit"></div>
                </div>
                

                <div class="form-group">
                    <label class="control-label">Content</label>
                    <textarea class="form-control" id="content-edit" rows="4"></textarea>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content-edit"></div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                <button type="button" class="btn btn-primary" id="update">UPDATE</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    //button create post event
    $('body').on('click', '#btn-edit-post', function () {

        let id = $(this).data('id');

        //fetch detail post with ajax
        $.ajax({
            url: `/vacancy/detail${id}`,
            type: "GET",
            cache: false,
            success:function(response){

                //fill data to form
                $('#post_id').val(response.data.id);
                $('#title-edit').val(response.data.title);
                $('#content-edit').val(response.data.content);

                //open modal
                $('#modal-edit').modal('show');
            }
        });
    });
    

    //action update post
    $('#update').click(function(e) {
        e.preventDefault();

        //define variable
        let post_id = $('#post_id').val();
        let title   = $('#title-edit').val();
        let content = $('#content-edit').val();
        let token   = $("meta[name='csrf-token']").attr("content");
        
        //ajax
        $.ajax({

            url: `/posts/${post_id}`,
            type: "PUT",
            cache: false,
            data: {
                "title": title,
                "content": content,
                "_token": token
            },
            success:function(response){

                //show success message
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });

                //data post
                let post = `
                    <tr id="index_${response.data.id}">
                        <td>${response.data.title}</td>
                        <td>${response.data.content}</td>
                        <td class="text-center">
                            <a href="javascript:void(0)" id="btn-edit-post" data-id="${response.data.id}" class="btn btn-primary btn-sm">EDIT</a>
                            <a href="javascript:void(0)" id="btn-delete-post" data-id="${response.data.id}" class="btn btn-danger btn-sm">DELETE</a>
                        </td>
                    </tr>
                `;
                
                //append to post data
                $(`#index_${response.data.id}`).replaceWith(post);

                //close modal
                $('#modal-edit').modal('hide');
                

            },
            error:function(error){
                
                if(error.responseJSON.title[0]) {

                    //show alert
                    $('#alert-title-edit').removeClass('d-none');
                    $('#alert-title-edit').addClass('d-block');

                    //add message to alert
                    $('#alert-title-edit').html(error.responseJSON.title[0]);
                } 

                if(error.responseJSON.content[0]) {

                    //show alert
                    $('#alert-content-edit').removeClass('d-none');
                    $('#alert-content-edit').addClass('d-block');

                    //add message to alert
                    $('#alert-content-edit').html(error.responseJSON.content[0]);
                } 

            }

        });

    });

</script>

<!-- <div class="modal fade bd-example-modal-lg-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Detail Lowongan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div class="modal-body">
                <form method="put" action="vacancy">
                    {{ csrf_field() }}
                    <input type="text" name="vacancies" value="{{ $v->id }}" hidden>

                    <div class="row">
                        <div class="col-md-6">
                            <a class="text-black">Lowongan</a>
                            <p>{{ $v->lowongan }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Perusahaan</h5>
                            <p>{{ $v->perusahaan }}</p>
                        </div>
                        <div class="col-md-6 mt-2">
                            <h5>Keahlian</h5>
                            <p>{{ $v->keahlian }}</p>
                        </div>
                        <div class="col-md-6 mt-2">
                            <h5>Pendidikan</h5>
                            <p>{{ $v->pendidikan }}</p>
                        </div>
                        <div class="col-md-6 mt-2">
                            <h5>Kualifikasi</h5>
                            <p>{{ $v->kualifikasi }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Lokasi</h5>
                            <p>{{ $v->lokasi }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Lokasi</h5>
                            <p>{{ $v->lokasi }}</p>
                        </div>
                    </div>
                </form>
                   
            </div>
        </div>
    </div>
</div> -->
@endsection