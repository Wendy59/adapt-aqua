<!doctype html>
@extends('layouts.admin.base')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-phone"></i> Contact</h3>
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
                            <section id="admin_contact" class="section_admin">
                                <b><u><span>Titre</span></u></b> : <span id='admin_contact_title'>{{$infos['title']}}</span></br></br>
                                <b><u><span>Description</span></u></b> : <span id='admin_contact_description'>{{$infos['description']}}</span></br></br>
                                <hr></br>
                                <b><u><span>Adresse (ligne 1)</span></u></b> : <span id='admin_contact_adress1'>{{$infos['adress1']}}</span></br></br>
                                <b><u><span>Adresse (ligne 2)</span></u></b> : <span id='admin_contact_adress2'>{{$infos['adress2']}}</span></br></br>
                                <b><u><span>Adresse (ligne 3)</span></u></b> : <span id='admin_contact_adress3'>{{$infos['adress3']}}</span></br></br>
                                <b><u><span>URL Maps</span></u></b> : <span id='admin_contact_maps'>{{$infos['maps']}}</span></br></br>
                                <hr></br>
                                <b><u><span>E-mail</span></u></b> : <span id='admin_contact_mail'>{{$infos['mail']}}</span></br></br>
                                <b><u><span>Téléphone</span></u></b> : <span id='admin_contact_tel'>{{$infos['tel']}}</span></br></br>
                                <b><u><span>URL Facebook</span></u></b> : <span id='admin_contact_facebook'>{{$infos['facebook']}}</span></br></br>
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
                    <h4 class="modal-title" id="modalEditLabel">Modification des informations du contact</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
		<form id="admin_contact_form"> 
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
                            <hr>
                            <div class="form-group" id="adress1Group">
                                <label for="adress1" class="control-label">Adresse (ligne 1) :</label>
                                <input type="text" class="form-control" id="adress1" name="adress1" />
                            </div>		    
                            <div class="form-group" id="adress2Group">
                                <label for="adress2" class="control-label">BoutAdresse (ligne 2) :</label>
                                <input type="text" class="form-control" id="adress2" name="adress2" />
                            </div>		    
                            <div class="form-group" id="adress3Group">
                                <label for="adress3" class="control-label">Adresse (ligne 3) :</label>
                                <input type="text" class="form-control" id="adress3" name="adress3" />
                            </div>		    
                            <div class="form-group" id="mapsGroup">
                                <label for="maps" class="control-label">URL de la carte maps :</label>
                                <input type="text" class="form-control" id="maps" name="maps" />
                            </div>
                            <hr>		    
                            <div class="form-group" id="mailGroup">
                                <label for="mail" class="control-label">E-mail :</label>
                                <input type="text" class="form-control" id="mail" name="mail" />
                            </div>		    
                            <div class="form-group" id="telGroup">
                                <label for="tel" class="control-label">Téléphone :</label>
                                <input type="text" class="form-control" id="tel" name="tel" />
                            </div>		    
                            <div class="form-group" id="facebookGroup">
                                <label for="facebook" class="control-label">URL de la page facebook :</label>
                                <input type="text" class="form-control" id="facebook" name="facebook" />
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
        var urlEdit = "{{route('admin.contact.update')}}";   
        
        function update(params){
            $.post(urlEdit, params, function (result) {
                if(!result){
                    return;
                }
                
                $('#admin_contact_title').html(result.data.title);
                $('#admin_contact_description').html(result.data.description);
                $('#admin_contact_adress1').html(result.data.adress1);
                $('#admin_contact_adress2').html(result.data.adress2);
                $('#admin_contact_adress3').html(result.data.adress3);
                $('#admin_contact_maps').html(result.data.maps);
                $('#admin_contact_mail').html(result.data.mail);
                $('#admin_contact_tel').html(result.data.tel);
                $('#admin_contact_facebook').html(result.data.facebook);
            }, "json");
        }
        
        // Ouverture de la dialogue
        $('#edit').on('click', function(){ 
            $modal.find('#title').val($('#admin_contact_title')[0].textContent);
            $modal.find('#description').val($('#admin_contact_description')[0].textContent);
            $modal.find('#adress1').val($('#admin_contact_adress1')[0].textContent);
            $modal.find('#adress2').val($('#admin_contact_adress2')[0].textContent);
            $modal.find('#adress3').val($('#admin_contact_adress3')[0].textContent);
            $modal.find('#maps').val($('#admin_contact_maps')[0].textContent);
            $modal.find('#mail').val($('#admin_contact_mail')[0].textContent);
            $modal.find('#tel').val($('#admin_contact_tel')[0].textContent);
            $modal.find('#facebook').val($('#admin_contact_facebook')[0].textContent);
            
            $modal.modal('show');
        });
        
        // Validation du changement de titre
        $('#valid_modalEdit').on('click', function(){
            var item = {
                title: $modal.find('#title').val(),
                description: $modal.find('#description').val(),
                adress1: $modal.find('#adress1').val(),
                adress2: $modal.find('#adress2').val(),
                adress3: $modal.find('#adress3').val(),
                maps: $modal.find('#maps').val(),
                mail: $modal.find('#mail').val(),
                tel: $modal.find('#tel').val(),
                facebook: $modal.find('#facebook').val(),
            };
            update(item);
        });
    });
</script>
@endpush