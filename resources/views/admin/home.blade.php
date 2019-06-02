<!doctype html>
@extends('layouts.admin.base')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-home"></i> Accueil</h3>
                </div>
            </div>
            
            <!-- Prix avec engagement -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-id-badge"></i><strong id="title1">Paramétrage</strong></h2>
                            <div class="panel-actions">
                                <a href="#" class="btn-minimize" id="edit"><i class="fa fa-pencil"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <section id="admin_home" class="section_admin">
                                <b><u><span>Titre</span></u></b> : <span id='admin_home_title'>{{$infos['title']}}</span></br></br>
                                <b><u><span>Description</span></u></b> : <span id='admin_home_description'>{{$infos['description']}}</span></br></br>
                                <b><u><span>Bouton de lancement</span></u></b> : <span id='admin_home_button'>{{$infos['button']}}</span></br></br>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- Modal change title -->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalEditLabel">Modification des informations de l'accueil</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
		<form id="admin_home_form"> 
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group" id="titleGroup">
                                <label for="title" class="control-label">Titre :</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                            <div class="form-group" id="descriptionGroup">
                                <label for="description" class="control-label">Description :</label>
                                <input type="text" class="form-control" name="description" id="description">
                            </div>
                            <div class="form-group" id="buttonGroup">
                                <label for="button" class="control-label">Bouton de déroulement :</label>
                                <input type="text" class="form-control" id="button" name="button" />
                            </div>		    
                        </div>
                    </div>
		</form>
	    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="valid_modalEdit">Valider</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


@endsection


@push('script')
<!--ici les script js-->
<script type="text/javascript" >
    $(document).ready(function () {
        //variables
        var $modal = $('#modalEdit');
        var urlEdit = "{{route('admin.home.update')}}";   
        
        function updateHome(params){
            $.post(urlEdit, params, function (result) {
                if(!result){
                    return;
                }
                
                $('#admin_home_title').html(result.data.title);
                $('#admin_home_description').html(result.data.description);
                $('#admin_home_button').html(result.data.button);
            }, "json");
        }
        
        // Ouverture de la dialogue
        $('#edit').on('click', function(){ 
            $modal.find('#title').val($('#admin_home_title')[0].textContent);
            $modal.find('#description').val($('#admin_home_description')[0].textContent);
            $modal.find('#button').val($('#admin_home_button')[0].textContent);
            
            $modal.modal('show');
        });
        
        // Validation du changement de titre
        $('#valid_modalEdit').on('click', function(){
            var item = {
                title: $modal.find('#title').val(),
                description: $modal.find('#description').val(),
                button: $modal.find('#button').val()
            };
            updateHome(item);
        });
    });
</script>
@endpush