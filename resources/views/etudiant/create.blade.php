@extends('layouts/template')

@section('contenu')
{!! HTML::style('assets/plugins/footable/css/footable.core.css') !!}
        {!! HTML::style('assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css') !!}


        <!-- for modal fadeIn -->
        {!! HTML::style('assets/plugins/custombox/dist/custombox.min.css') !!}

        <!-- timePicker -->
        {!! HTML::style('assets/plugins/timepicker/bootstrap-timepicker.min.css') !!}


        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        {!! HTML::style('assets/assets/global/plugins/font-awesome/css/font-awesome.min.css') !!}
        {!! HTML::style('assets/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}
        {{-- {!! HTML::style('assets/assets/global/plugins/bootstrap/css/bootstrap.min.css') !!} --}}
        {!! HTML::style('assets/assets/global/plugins/uniform/css/uniform.default.css') !!}
        {!! HTML::style('assets/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {!! HTML::style('assets/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}
        {!! HTML::style('assets/assets/global/plugins/typeahead/typeahead.css') !!}
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {!! HTML::style('assets/assets/global/plugins/icheck/skins/all.css') !!}
        <!-- END PAGE LEVEL PLUGINS -->
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
{!! HTML::style('assets/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') !!}
{!! HTML::style('assets/assets/global/plugins/fancybox/source/jquery.fancybox.css') !!}
<!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL STYLES -->
        {!! HTML::style('assets/assets/global/css/components.min.css') !!}
        {!! HTML::style('assets/assets/global/css/plugins.min.css') !!}
        <!-- END THEME GLOBAL STYLES -->
        
        <!-- BEGIN PAGE LEVEL STYLES -->
        {!! HTML::style('assets/assets/pages/css/search.min.css') !!}
        <!-- END PAGE LEVEL STYLES -->
        
        <!-- BEGIN THEME LAYOUT STYLES -->
        {!! HTML::style('assets/assets/layouts/layout/css/layout.min.css') !!}
        {!! HTML::style('assets/assets/layouts/layout/css/themes/light2.min.css') !!}
        {!! HTML::style('assets/assets/layouts/layout/css/custom.min.css') !!}
<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! HTML::style('assets/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') !!}
{!! HTML::style('assets/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css') !!}
<!-- END PAGE LEVEL PLUGINS -->
 {!! HTML::style('../bower_components/summernote/dist/summernote.css') !!}
        <!--Morris Chart CSS -->

        {!! HTML::style('assets/plugins/morris/morris.css') !!}
        {!! HTML::style('assets/css/bootstrap.min.css') !!}
        {!! HTML::style('assets/css/core.css') !!}
        {{-- {!! HTML::style('assets/css/components.css') !!} --}}
        {!! HTML::style('assets/css/icons.css') !!}
        {!! HTML::style('assets/css/pages.css') !!}
        {!! HTML::style('assets/css/responsive.css') !!}
<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! HTML::style('assets/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') !!}

<style type="text/css">
    input[type=text],input[type=email]
    {
        width: 90%;
    }
</style>
<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
<div class="row"> 
    <div class="col-lg-12"> 
        <div class="tabs-vertical-env"> 
            <ul class="nav tabs-vertical"> 
                <li class="active">
                    <a href="#section-basic" data-toggle="tab" aria-expanded="true">Informations</a>
                </li> 
                <li class="">
                    <a href="#section-work" data-toggle="tab" aria-expanded="false">Expérience professionnelle</a>
                </li> 
                <li class="">
                    <a href="#section-competance" data-toggle="tab" aria-expanded="false">Compétences</a>
                </li> 
                <li class="">
                    <a href="#section-formation" data-toggle="tab" aria-expanded="false">Formations</a>
                </li> 
                <li class="">
                    <a href="#section-langue" data-toggle="tab" aria-expanded="false">Langues</a>
                </li> 
                <li class="">
                    <a href="#section-interest" data-toggle="tab" aria-expanded="false">Centres d'intêret</a>
                </li> 
            </ul> 

            <div class="tab-content"> 

                <div class="tab-pane active" id="section-basic" ng-controller="infoBasicController"> 
                    <form class="form-horizontal " role="form" id="form_sample_2" enctype="multipart/form-data" >
                        <div class="row" >
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-sm-8">
                                                <h4 class="m-t-0 header-title"><b>Informations</b></h4>
                                                <p class="text-muted font-13 m-b-30">
                                                    Some basic informations. 
                                                </p>
                                            </div>
                                            <div class="col-sm-4">
                                                <button type="submit" class="btn btn-primary btn-lg" ng-click="updateInfoBasic(etudiant)" >Sauvegarder   <i ng-show="loading" class="fa fa-spinner fa-spin"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-body">
                                                <div class="alert alert-danger display-hide">
                                                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                <div class="alert alert-success display-hide">
                                                    <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label class="control-label" for="etudiant_nom">Nom de famille
                                                                <span class="required"> * </span>
                                                            </label>
                                                        </div>
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <input maxlength="25" type="text" id="etudiant_nom" class="form-control" ng-model="etudiant.nom" placeholder="Nom">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label class="control-label"  for="etudiant_prenom">Prénom
                                                                <span class="required"> * </span>
                                                            </label>
                                                        </div>
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <input maxlength="25" id="etudiant_prenom" type="text" class="form-control" ng-model="etudiant.prenom" placeholder="Prénom" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label class="control-label" for="etudiant_email">Addresse E-mail
                                                                <span class="required"> * </span>
                                                            </label>
                                                        </div>
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <input maxlength="100" required="" type="email" ng-model="etudiant.email" id="etudiant_email" class="form-control" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label class="control-label" for="etudiant_numTelephone" >Numéro de téléphone
                                                                <span class="required"> * </span>
                                                            </label>
                                                        </div>
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <input maxlength="25" ng-model="etudiant.telephone" id="etudiant_numTelephone" placeholder='+(212)' type="text" class="form-control etud" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label class="control-label"for="etudiant_adresse">Adresse</label>
                                                        </div>
                                                        <input type="text" class="form-control etud" id="etudiant_adresse" maxlength="100" ng-model="etudiant.adresse" placeholder="Hay Lalla Meriem">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label class="control-label" for="etudiant_situation">Situation familialle</label>
                                                        </div>

                                                        <select ng-cloak="" style="width: 90%" class="form-control" id="etudiant_situation" ng-model="etudiant.situation">
                                                            <option ng-repeat="option in situation.availableOptions" value="<%= option.name %>">
                                                                <%= option.name %>
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="row">

                                                            <div class="col-md-1">
                                                                <label for="etudiant_photo">Photo</label>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <img id="etudiant_photo" class="img img-responsive" ng-cloack 
                                                                     ng-src="<%= '{{ asset('../storage/uploads')}}/' + etudiant.photo %>"
                                                                     style="width: inherit; height: inherit;">
                                                                <span class="info">gif, jpg, png, jpeg<br>320 x 400 px</span>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="btn btn-primary" ngf-select="upload($file,2)" ngf-pattern="'image/*'"
                                                                     ngf-accept="'image/*'" ngf-max-size="20MB" >Uploader une nouvelle photo  <i ng-show="loadingUploadPhoto" class="fa fa-spinner fa-spin"></i>
                                                                </div> 

                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- < img src = "{{asset('assets/images/').'/'.$imgsrc}}"> --}}



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="section-work" ng-controller="experienceController"> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box"   >
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="m-t-0 header-title"><b>Expérience professionnelle</b></h4>
                                        <p class="text-muted font-13 m-b-30">
                                            Informations sur vos experiences.
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="panel-group accordion" id="experiences">

                                            <div class="panel panel-default" ng-repeat='exp in Experiences track by exp.id'>
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle accordion-toggle-styled collapsed" 
                                                           data-toggle="collapse" data-parent="#experiences" href="#experience<%=exp.id %>">  <%=exp.intitule %></a>
                                                    </h4>
                                                </div>
                                                <div id="experience<%=exp.id %>" class="panel-collapse collapse">
                                                    <div class="panel-body" style="height:200px; overflow-y:auto;">
                                                        <div class="col-md-12 col-sm-12">

                                                            <div class="portlet-body">
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Entreprise: </div>
                                                                    <div class="col-md-7 value"> <%=exp.organisation %></div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Date début: </div>
                                                                    <div class="col-md-7 value"> <%=exp.date_dedut | date:'dd/MM/yyyy' %></div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Date fin: </div>
                                                                    <div class="col-md-7 value"> <%=exp.date_fin | date:'dd/MM/yyyy' %></div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Ville: </div>
                                                                    <div class="col-md-7 value"> <%=exp.ville %></div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Description: </div>
                                                                    <div class="col-md-7 value"> <%=exp.description %></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="panel-footer clearfix">
                                                        <div class="pull-right">
                                                            <button class="btn btn-success btn-xs" ng-click="prepareUpdateExperience(exp, $index)"
                                                                    data-target="#custom-modal-EditExperience" data-toggle="modal"
                                                                    class="btn btn-primary waves-effect waves-light" data-animation="fadein" 
                                                                    data-overlaySpeed="200" data-overlayColor="#36404a">
                                                                <span class="glyphicon glyphicon-edit" ></span>Modifier
                                                            </button>
                                                            <button class="btn btn-danger btn-xs" ng-click="prepareDeleteExperience($index)"
                                                                    data-target="#custom-modal-DeleteExperience" data-toggle="modal"
                                                                    class="btn btn-primary waves-effect waves-light" data-animation="slidetogether" 
                                                                    data-overlaySpeed="200" data-overlayColor="#36404a">
                                                                <span class="glyphicon glyphicon-remove" ></span>Supprimer
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <a
                                            data-target="#custom-modal-AddExperience" data-toggle="modal"
                                            class="btn btn-primary waves-effect waves-light" data-animation="fadein" 
                                            data-overlaySpeed="200" data-overlayColor="#36404a">Ajouter une expérience
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Add Experience Modal -->
                    <div id="custom-modal-AddExperience" class="modal fade" data-width="780" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <form class="form-horizontal " >
                            <div class="modal-header">
                                <h4 class="custom-modal-title">Expérience professionnelle</h4> 
                            </div> 
                            <div class="modal-body">
                                <div class="row"> 
                                    <div class="col-md-12"> 
                                        <div class="form-group"> 
                                            <label for="field-1" class="control-label">Experience</label> 
                                            <input type="text" class="form-control" required ng-model="experience.intitule" id="field-1" placeholder="Website Developer"> 
                                        </div> 
                                    </div> 

                                </div> 
                                <div class="row"> 
                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-2" class="control-label">Entreprise</label> 
                                            <input type="text" class="form-control" required ng-model="experience.organisation" id="field-2" placeholder="Evosolution"> 
                                        </div> 
                                    </div> 
                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-3" class="control-label">Ville</label> 
                                            <input type="text" class="form-control" required ng-model="experience.ville" id="field-3" placeholder="Casablanca"> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="row"> 
                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-4" class="control-label">Date début</label> 
                                            <input type="date" class="form-control" required ng-model="experience.date_dedut" id="field-4" placeholder="01/03/2016" > 
                                        </div> 
                                    </div> 
                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-5" class="control-label">Date fin</label> 
                                            <input type="date" class="form-control" required ng-model="experience.date_fin" id="field-5" placeholder="30/09/2016" > 
                                        </div> 
                                    </div>
                                </div> 
                                <div class="row"> 
                                    <div class="col-md-12"> 
                                        <div class="form-group no-margin"> 
                                            <label for="field-7" class="control-label">Autres informations</label> 
                                            <textarea class="form-control autogrow" ng-model="experience.description" id="field-7" placeholder="Décrire votre expérience" style="overflow: auto; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                                            <span class="info">Détails supplémentaires comme les responsabilités, résultats, etc.</span>
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="modal-footer"> 
                                <button type="button" data-dismiss="modal" ng-click="experience = null" class="btn btn-default waves-effect" >Annuler</button> 
                                <button type="submit" data-dismiss="modal" class="btn btn-info waves-effect waves-light" ng-click="addExperience()">Sauvegarder</button> 
                            </div> 
                        </form>
                    </div><!-- End Add Experience Modal -->
                    <!-- Delete Experience Modal-->
                    <div id="custom-modal-DeleteExperience" class="modal fade" data-width="780" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <div class="modal-header">
                            <button aria-hidden="true" class="bootbox-close-button close"
                                    data-dismiss="modal" type="button">×</button>
                            <h4 class="modal-title">Confirmation</h4>
                        </div>
                        <div class="modal-body">
                            <div class="bootbox-body">
                                Êtes-vous sûr de vouloir supprimer ?
                            </div>
                        </div>
                        <div class="modal-footer">

                            <button class="btn red"  data-dismiss="modal" type="button" ng-click="deleteExperience()">Supprimer
                            </button>
                            <button class="btn blue"
                                    data-dismiss="modal" type="button">Annuler
                            </button>
                        </div>
                    </div><!-- End Delete Experience Modal -->
                    <!-- Edit Experience Modal -->
                    <div id="custom-modal-EditExperience" class="modal fade" data-width="780" tabindex="-1" data-backdrop="static" data-keyboard="false">

                        <div class="modal-header">
                            <h4 class="custom-modal-title">Expérience professionnelle</h4> 
                        </div> 
                        <div class="modal-body">
                            <div class="row"> 
                                <div class="col-md-12"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Experience</label> 
                                        <input type="text" class="form-control" required ng-model="EditExperience.intitule" id="field-1" placeholder="Website Developer"> 
                                    </div> 
                                </div> 

                            </div> 
                            <div class="row"> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Entreprise</label> 
                                        <input type="text" class="form-control" required ng-model="EditExperience.organisation" id="field-2" placeholder="Evosolution"> 
                                    </div> 
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-3" class="control-label">Ville</label> 
                                        <input type="text" class="form-control" required ng-model="EditExperience.ville" id="field-3" placeholder="Casablanca"> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="row"> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-4" class="control-label">Date début</label> 
                                        <input type="date" class="form-control" required ng-model="EditExperience.date_dedut" id="field-4" placeholder="01/03/2016" > 
                                    </div> 
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-5" class="control-label">Date fin</label> 
                                        <input type="date" class="form-control" required ng-model="EditExperience.date_fin" id="field-5" placeholder="30/09/2016" > 
                                    </div> 
                                </div>
                            </div> 
                            <div class="row"> 
                                <div class="col-md-12"> 
                                    <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Autres informations</label> 
                                        <textarea class="form-control autogrow" ng-model="EditExperience.description" id="field-7" placeholder="Décrire votre expérience" style="overflow: auto; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                                        <span class="info">Détails supplémentaires comme les responsabilités, résultats, etc.</span>
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                        <div class="modal-footer"> 
                            <button type="button" data-dismiss="modal" ng-click="EditExperience = null" class="btn btn-default waves-effect" >Annuler</button> 
                            <button type="button" data-dismiss="modal" class="btn btn-info waves-effect waves-light" ng-click="updateExperience(EditExperience)">Sauvegarder</button> 
                        </div> 

                    </div><!-- End Edit Experience Modal -->
                </div> 
                <div class="tab-pane" id="section-competance" ng-controller="competenceController"> 
                    <div class="row" >
                        <div class="col-lg-12">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="m-t-0 header-title"><b>Compétences</b></h4>
                                        <p class="text-muted font-13 m-b-30">
                                            Informations sur vos compétances .
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" value="" id="object_tagsinput">
                                        <div class="margin-top-10">
                                            <input type="text" required class="form-control input-large" ng-model="competence.intitule" placeholder="C#" > 
                                        </div>
                                        <div class="margin-top-10">

                                            <select ng-cloak="" required class="form-control input-large"  ng-model="competence.niveau">
                                                <option ng-repeat="option in niveau.availableOptions track by option.id" value="<%= option.id %>">
                                                    <%= option.name %>
                                                </option>
                                            </select>
                                        </div>
                                        <div class="margin-top-10">
                                            <a ng-click="addCompetence()" class="btn red" >Ajouter</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div> 

                    </div> 
                </div> 
                <div class="tab-pane" id="section-formation" ng-controller="formationController"> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box"   >
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="m-t-0 header-title"><b>Formation</b></h4>
                                        <p class="text-muted font-13 m-b-30">
                                            Informations sur vos formations .
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="panel-group accordion" id="formations">

                                            <div class="panel panel-default" ng-repeat='formation in Formations track by formation.id'>
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle accordion-toggle-styled collapsed" 
                                                           data-toggle="collapse" data-parent="#formations" href="#formation<%=formation.id %>">  <%=formation.intitule %></a>
                                                    </h4>
                                                </div>
                                                <div id="formation<%=formation.id %>" class="panel-collapse collapse">
                                                    <div class="panel-body" style="height:200px; overflow-y:auto;">
                                                        <div class="col-md-12 col-sm-12">

                                                            <div class="portlet-body">
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Établissement: </div>
                                                                    <div class="col-md-4 value">         <%=formation.etablissement.code %></div><div class="col-md-3 value"> <%=formation.etablissement.ville %></div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Date début: </div>
                                                                    <div class="col-md-7 value"> <%=formation.date_dedut | date:'dd/MM/yyyy' %></div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Date fin: </div>
                                                                    <div class="col-md-7 value"> <%=formation.date_fin | date:'dd/MM/yyyy' %></div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Diplôme: </div>
                                                                    <div class="col-md-7 value"> <%=formation.diplome %></div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Mention: </div>
                                                                    <div class="col-md-7 value"> <%=formation.mention %></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="panel-footer clearfix">
                                                        <div class="pull-right">
                                                            <button class="btn btn-success btn-xs" ng-click="prepareUpdateFormation(formation, $index)"
                                                                    data-target="#custom-modal-EditFormation" data-toggle="modal"
                                                                    class="btn btn-primary waves-effect waves-light" data-animation="fadein" 
                                                                    data-overlaySpeed="200" data-overlayColor="#36404a">
                                                                <span class="glyphicon glyphicon-edit" ></span>Modifier
                                                            </button>
                                                            <button class="btn btn-danger btn-xs" ng-click="prepareDeleteFormation($index)"
                                                                    data-target="#custom-modal-DeleteFormation" data-toggle="modal"
                                                                    class="btn btn-primary waves-effect waves-light" data-animation="slidetogether" 
                                                                    data-overlaySpeed="200" data-overlayColor="#36404a">
                                                                <span class="glyphicon glyphicon-remove" ></span>Supprimer
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <a
                                            data-target="#custom-modal-AddFormation" data-toggle="modal"
                                            class="btn btn-primary waves-effect waves-light" data-animation="fadein" 
                                            data-overlaySpeed="200" data-overlayColor="#36404a">Ajouter une formation
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Add Formation Modal -->
                    <div id="custom-modal-AddFormation" class="modal fade" data-width="780" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <form class="form-horizontal " >
                            <div class="modal-header">
                                <h4 class="custom-modal-title">Formation</h4> 
                            </div> 
                            <div class="modal-body">
                                <div class="row"> 
                                    <div class="col-md-12"> 
                                        <div class="form-group"> 
                                            <label for="field-1" class="control-label">Formation</label> 
                                            <input type="text" class="form-control" required ng-model="formation.intitule" id="field-1" placeholder=""> 
                                        </div> 
                                    </div> 

                                </div> 
                                <div class="row"> 
                                    <div class="col-md-12"> 
                                        <div class="form-group"> 
                                            <label for="field-6" class="control-label">Diplôme</label> 
                                            <input type="text" class="form-control" required ng-model="formation.diplome" id="field-6" placeholder="Ingénieur"> 
                                        </div> 
                                    </div> 

                                </div>
                                <div class="row"> 
                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-2" class="control-label">Établissement</label> 
                                            <select ng-cloak="" style="width: 90%" class="form-control" id="field-2" 
                                                    ng-options="table.code for table in Etablissements track by table.id" 
                                                    ng-model="formation.etablissement" ng-change="formation.etablissement">

                                            </select>
                                        </div> 
                                    </div> 
                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-3" class="control-label">Mention</label> 
                                            <input type="text" class="form-control" required ng-model="formation.mention" id="field-3" placeholder="Mention Bien"> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="row"> 
                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-4" class="control-label">Date début</label> 
                                            <input type="date" class="form-control" required ng-model="formation.date_dedut" id="field-4" placeholder="01/03/2016" > 
                                        </div> 
                                    </div> 
                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-5" class="control-label">Date fin</label> 
                                            <input type="date" class="form-control" required ng-model="formation.date_fin" id="field-5" placeholder="30/09/2016" > 
                                        </div> 
                                    </div>
                                </div> 
                            </div> 
                            <div class="modal-footer"> 
                                <button type="button" data-dismiss="modal" ng-click="formation = null" class="btn btn-default waves-effect" >Annuler</button> 
                                <button type="submit" data-dismiss="modal" class="btn btn-info waves-effect waves-light" ng-click="addFormation()">Sauvegarder</button> 
                            </div> 
                        </form>
                    </div><!-- End Add Formation Modal -->
                    <!-- Delete Formation Modal-->
                    <div id="custom-modal-DeleteFormation" class="modal fade" data-width="780" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <div class="modal-header">
                            <button aria-hidden="true" class="bootbox-close-button close"
                                    data-dismiss="modal" type="button">×</button>
                            <h4 class="modal-title">Confirmation</h4>
                        </div>
                        <div class="modal-body">
                            <div class="bootbox-body">
                                Êtes-vous sûr de vouloir supprimer ?
                            </div>
                        </div>
                        <div class="modal-footer">

                            <button class="btn red"  data-dismiss="modal" type="button" ng-click="deleteFormation()">Supprimer
                            </button>
                            <button class="btn blue"
                                    data-dismiss="modal" type="button">Annuler
                            </button>
                        </div>
                    </div><!-- End Delete Formation Modal -->
                    <!-- Edit Formation Modal -->
                    <div id="custom-modal-EditFormation" class="modal fade" data-width="780" tabindex="-1" data-backdrop="static" data-keyboard="false">

                        <div class="modal-header">
                            <h4 class="custom-modal-title">Formation</h4> 
                        </div> 
                        <div class="modal-body">
                            <div class="row"> 
                                <div class="col-md-12"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Formation</label> 
                                        <input type="text" class="form-control" required ng-model="EditFormation.intitule" id="field-1" placeholder=""> 
                                    </div> 
                                </div> 

                            </div> 
                            <div class="row"> 
                                <div class="col-md-12"> 
                                    <div class="form-group"> 
                                        <label for="field-6" class="control-label">Diplôme</label> 
                                        <input type="text" class="form-control" required ng-model="EditFormation.diplome" id="field-6" placeholder="Ingénieur"> 
                                    </div> 
                                </div> 

                            </div>
                            <div class="row"> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Établissement</label> 
                                        <select ng-cloak="" style="width: 90%" class="form-control" id="field-2" 
                                                ng-options="table.code for table in Etablissements track by table.id" 
                                                ng-model="EditFormation.etablissement" ng-change="EditFormation.etablissement">

                                        </select>

                                    </div> 
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-3" class="control-label">Mention</label> 
                                        <input type="text" class="form-control" required ng-model="EditFormation.mention" id="field-3" placeholder="Mention Bien"> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="row"> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-4" class="control-label">Date début</label> 
                                        <input type="date" class="form-control" required ng-model="EditFormation.date_dedut" id="field-4" placeholder="01/03/2016" > 
                                    </div> 
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-5" class="control-label">Date fin</label> 
                                        <input type="date" class="form-control" required ng-model="EditFormation.date_fin" id="field-5" placeholder="30/09/2016" > 
                                    </div> 
                                </div>
                            </div> 
                        </div> 
                        <div class="modal-footer"> 
                            <button type="button" data-dismiss="modal" ng-click="EditFormation = null" class="btn btn-default waves-effect" >Annuler</button> 
                            <button type="button" data-dismiss="modal" class="btn btn-info waves-effect waves-light" ng-click="updateFormation(EditFormation)">Sauvegarder</button> 
                        </div> 

                    </div><!-- End Edit Formation Modal -->
                </div> 
                <div class="tab-pane" id="section-langue" ng-controller="langueController"> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box"  >
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="m-t-0 header-title"><b>Langues</b></h4>
                                        <p class="text-muted font-13 m-b-30">
                                            Précisez vos langues .
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form">
                                            <div class="form-body">
                                                <div class="form-group" ng-repeat='lang in Langues track by lang.id' >
                                                    <label><%= lang.intitule%></label>
                                                    <div class="input-group">
                                                        <div class="icheck-inline">
                                                            <label ng-repeat='niv in niveaux.availableOptions track by niv.id' >
                                                                <input type="radio" name="radio<%=lang.id%>" class="icheck"
                                                                       data-radio="iradio_square-grey" 
                                                                       ng-model="lang.niveau" value="<%= niv.id%>" ng-change="updateLangue(lang)"> 
                                                                <a href="#" data-toggle="tooltip" title="<%= niv.name%>"><%= niv.id%></a>
                                                            </label>
                                                            <button class="btn btn-danger btn-xs" ng-click="deleteLangue($index)"
                                                                    class="btn btn-primary waves-effect waves-light" >
                                                                <span class="glyphicon glyphicon-remove" ></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <hr>
                                                <hr>
                                                <div class="form-group" >
                                                    <input type="text" class="form-control" ng-model="langue.intitule">
                                                    <div class="input-group">
                                                        <div class="icheck-inline">
                                                            <label>
                                                                <input type="radio" name="radio<%=lang.id%>" class="icheck"
                                                                       data-radio="iradio_square-grey" 
                                                                       ng-model="langue.niveau" value="1" > 
                                                                <a href="#" data-toggle="tooltip" title="Bilingue (ou trilingue...)">1</a>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="radio<%=lang.id%>" class="icheck"
                                                                       data-radio="iradio_square-grey" 
                                                                       ng-model="langue.niveau" value="2" > 
                                                                <a href="#" data-toggle="tooltip" title="Courant">2</a>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="radio<%=lang.id%>" class="icheck"
                                                                       data-radio="iradio_square-grey" 
                                                                       ng-model="langue.niveau" value="3" > 
                                                                <a href="#" data-toggle="tooltip" title="Moyen">3</a>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="radio<%=lang.id%>" class="icheck"
                                                                       data-radio="iradio_square-grey" 
                                                                       ng-model="langue.niveau" value="4" > 
                                                                <a href="#" data-toggle="tooltip" title="Bonnes notions">4</a>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="radio<%=lang.id%>" class="icheck"
                                                                       data-radio="iradio_square-grey" 
                                                                       ng-model="langue.niveau" value="5" > 
                                                                <a href="#" data-toggle="tooltip" title="Notions">5</a>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="radio<%=lang.id%>" class="icheck"
                                                                       data-radio="iradio_square-grey" 
                                                                       ng-model="langue.niveau" value="6" > 
                                                                <a href="#" data-toggle="tooltip" title="Scolaire">6</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary btn-lg" ng-click="addLangue()" >Ajouter   <i ng-show="loading" class="fa fa-spinner fa-spin"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div> 
                </div> 
                <div class="tab-pane" id="section-interest" ng-controller="loisirController"> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box"  >
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="m-t-0 header-title"><b>Centres d'intêret</b></h4>
                                        <p class="text-muted font-13 m-b-30">
                                            Précisez vos loisirs et centres d'intêret .
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <summernote ng-model="loisir.description" height="300" lang="fr-FR"></summernote>
                                        <div >
                                            <button type="submit" class="btn btn-primary btn-lg" ng-click="updateLoisir(loisir)" >Sauvegarder   <i ng-show="loadingLoisir" class="fa fa-spinner fa-spin"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

                <script>
                            window.onload = function() {
                            $('input.etud').maxlength({
                            alwaysShow: false,
                                    warningClass: "label label-success",
                                    limitReachedClass: "label label-danger",
                                    separator: ' out of ',
                                    preText: 'You typed ',
                                    postText: ' chars available.',
                                    validate: true
                            });
                            };
                </script>
                @stop