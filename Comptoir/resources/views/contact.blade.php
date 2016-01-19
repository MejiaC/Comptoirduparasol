@extends('layouts.common')

@section('content')
<section id="content">
	<div class="container_24 top-3">  
        <div class="grid_7">
            <h2 class="h2-4">Nous contacter:</h2>
            <div class="map img-border">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.865252821858!2d2.3339578507963727!3d48.89890510570625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66ef82dd9bb33%3A0xc45e795a1b7a5ea5!2s13+Rue+Jean+Varenne%2C+75018+Paris-18E-Arrondissement!5e0!3m2!1sfr!2sfr!4v1451303484820" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                </div>
            <dl class="adr">
                <dt>Action</dt>
                <dd class="upper">13 Rue Jean Varenne, 75018 Paris</dd>
                <dd><span class="upper">Telephone:</span><strong></strong></dd>
                <dd><span class="upper">Fax:</span><strong></strong></dd>
                <dd><span class="upper">Email:</span><a href="#" class="link">contact@comptoirduparasol.fr</a></dd>
            </dl> 
        </div>
            @extends('layouts.common')

    @section('content')
    <section id="content">
        <div class="container_24 top-3">  
            <div class="grid_7">
                <h2 class="h2-4">Nous contacter:</h2>
                <div class="map img-border">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.865252821858!2d2.3339578507963727!3d48.89890510570625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66ef82dd9bb33%3A0xc45e795a1b7a5ea5!2s13+Rue+Jean+Varenne%2C+75018+Paris-18E-Arrondissement!5e0!3m2!1sfr!2sfr!4v1451303484820" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                </div>
                <dl class="adr">
                    <dt>Action</dt>
                    <dd class="upper">13 Rue Jean Varenne, 75018 Paris</dd>
                    <dd><span class="upper">Telephone:</span><strong></strong></dd>
                    <dd><span class="upper">Fax:</span><strong></strong></dd>
                    <dd><span class="upper">Email:</span><a href="#" class="link">contact@comptoirduparasol.fr</a></dd>
                </dl> 
            </div>

                  
                    <div class="grid_1§ prefix_1">
                                    <h2 class="h2-4">Formulaire de contact:</h2>
                <form id="form" method="post" >
                                    <div class="entree">
                                        <div class="libelle">Type d'&eacute;v&eacute;nement <span class="required etoile"> * </span></div>
                                        <div class="grp_reponse">
                                                <div class="checkradio">
                                                    <input type="radio" name="001|scq_work_type_monovalue" class="inputcheckradio required" value="work_type_monovalue_mariage"  />
                                                    <div class="textcheckradio">
                                                        <label>Anniversaire</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="radio" name="001|scq_work_type_monovalue" class="inputcheckradio required" value="work_type_monovalue__seminaire"  />
                                                    <div class="textcheckradio">
                                                        <label>Mariage</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="radio" name="001|scq_work_type_monovalue" class="inputcheckradio required" value="work_type_monovalue__cocktail"  />
                                                    <div class="textcheckradio">
                                                        <label>Cocktail / Soir&eacute;e entreprise</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="radio" name="001|scq_work_type_monovalue" class="inputcheckradio required" value="work_type_monovalue__famille"  />
                                                    <div class="textcheckradio">
                                                        <label>R&eacute;union de famille</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="radio" name="001|scq_work_type_monovalue" class="inputcheckradio required" value="work_type_monovalue__anniversaire"  />
                                                    <div class="textcheckradio">
                                                        <label>Communion / Bapt&ecirc;me</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="radio" name="001|scq_work_type_monovalue" class="inputcheckradio required" value="work_type_monovalue__communion"  />
                                                    <div class="textcheckradio">
                                                        <label>S&eacute;minaire / Congr&egrave;s</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="radio" name="001|scq_work_type_monovalue" class="inputcheckradio required" value="work_type_monovalue__autre"  />
                                                    <div class="textcheckradio">
                                                        <label>Autre</label>
                                                    </div>
                                                </div>
                                                </div>
                                        <input type="hidden" class="reponseDevis" name="reponses[]" value="Type d'&eacute;v&eacute;nement|" />
                                    </div>
                                    <div class="entree">
                                        <div class="libelle">Date estim&eacute;e de l'&eacute;v&eacute;nement <span class="required etoile"> * </span></div>
                                        <div class="grp_reponse"><input type="text" name="DateOfBook" value="" class="required" /></div>
                                        <input type="hidden" class="reponseDevis" name="reponses[]" value="Date estim&eacute;e de l'&eacute;v&eacute;nement|" />
                                    </div>
                                    <div class="entree">
                                        <div class="libelle">Nombre de convives estim&eacute; <span class="required etoile"> * </span></div>
                                        <div class="grp_reponse"><select name="003|scq_delay_monovalue"  class="required defaultValueAct"><option value="0" class="required" >Nombre de personnes</option><option value="delay_monovalue__520" class="required" >5 &agrave; 20</option><option value="delay_monovalue__2150" class="required" >21 &agrave; 50</option><option value="delay_monovalue__5175" class="required" >51 &agrave; 75</option><option value="delay_monovalue__76100" class="required" >76 &agrave; 100</option><option value="delay_monovalue__101150" class="required" >101 &agrave; 150</option><option value="delay_monovalue__151200" class="required" >151 &agrave; 200</option><option value="delay_monovalue__plus200" class="required" >Plus de 200</option></select></div>
                                        <input type="hidden" class="reponseDevis" name="reponses[]" value="Nombre de convives estim&eacute;|" />
                                    </div>
                                    <div class="entree">
                                        <div class="libelle">O&ugrave; doit se passer l'&eacute;v&eacute;nement <span class="required etoile"> * </span></div>
                                        <div class="grp_reponse">
                                    <div class="question_grp">
                                        <input type="text" name="cus_postcode_h" value=""  maxlength="5" id="cus_postcode_h" class="required" placeholder="Code postal"/>
                                    </div>
                                    <div class="question_grp">
                                        <select name="cus_town_h" id="cus_town_h" class="required" disabled="disabled">
                                        <option value="">Sélectionnez une ville</option>
                                        </select>
                                    </div></div>
                                        <input type="hidden" class="reponseDevis" name="reponses[]" value="O&ugrave; doit se passer l'&eacute;v&eacute;nement|" />
                                    </div>
                                    <div class="entree">
                                        <div class="libelle lch">Ou dans un rayon de </div>
                                        <div class="grp_reponsechkx">
                                              <div class="checkradio">
                                                <input type="checkbox" name="005|scq_property_type_monovalue[]" class="inputcheckradio" value="property_type_monovalue__20"  />
                                                <div class="textcheckradio">
                                                  <label>20 km</label>
                                                </div>
                                              </div>
                                              
                                              <div class="checkradio">
                                                <input type="checkbox" name="005|scq_property_type_monovalue[]" class="inputcheckradio" value="property_type_monovalue__30"  />
                                                <div class="textcheckradio">
                                                  <label>50 km</label>
                                                </div>
                                              </div>
                                              
                                              <div class="checkradio">
                                                <input type="checkbox" name="005|scq_property_type_monovalue[]" class="inputcheckradio" value="property_type_monovalue__50"  />
                                                <div class="textcheckradio">
                                                  <label>30 km</label>
                                                </div>
                                              </div>
                                              
                                              <div class="checkradio">
                                                <input type="checkbox" name="005|scq_property_type_monovalue[]" class="inputcheckradio" value="property_type_monovalue__80"  />
                                                <div class="textcheckradio">
                                                  <label>80 km</label>
                                                </div>
                                              </div>
                                              </div>
                                        <input type="hidden" class="reponseDevis" name="reponses[]" value="Ou dans un rayon de|" />
                                    </div>
                                    <div class="entree">
                                        <div class="libelle lch">Type de prestations recherch&eacute;es pour du mat&eacute;riel <span class="required etoile"> * </span></div>
                                        <div class="grp_reponsechkx">
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__tente"  />
                                                    <div class="textcheckradio">
                                                        <label>Bloc sanitaire</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__chapiteau"  />
                                                    <div class="textcheckradio">
                                                        <label>Mange-debout</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__tables"  />
                                                    <div class="textcheckradio">
                                                        <label>Chaises</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__chaises"  />
                                                    <div class="textcheckradio">
                                                        <label>Plante</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__eclairage"  />
                                                    <div class="textcheckradio">
                                                        <label>Chapiteau</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__chauffage"  />
                                                    <div class="textcheckradio">
                                                        <label>Podium</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__podium"  />
                                                    <div class="textcheckradio">
                                                        <label>Chauffage</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__sanitaire"  />
                                                    <div class="textcheckradio">
                                                        <label>Tables</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__sanitaire"  />
                                                    <div class="textcheckradio">
                                                        <label>&Eacute;clairage</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value=""  />
                                                    <div class="textcheckradio">
                                                        <label>Tente</label>
                                                    </div>
                                                </div>
                                                </div>
                                        <input type="hidden" class="reponseDevis" name="reponses[]" value="Type de prestations recherch&eacute;es pour du mat&eacute;riel|" />
                                    </div>
                                    <div class="entree">
                                        <div class="libelle lch">Type de prestations recherch&eacute;es pour la vaisselle <span class="required etoile"> * </span></div>
                                        <div class="grp_reponsechkx">
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__traiteurservice"  />
                                                    <div class="textcheckradio">
                                                        <label>Assiettes</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__traiteursansservice"  />
                                                    <div class="textcheckradio">
                                                        <label>Nappes</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__buffet"  />
                                                    <div class="textcheckradio">
                                                        <label>Avec possibilit&eacute; de rendre la vaisselle sale</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__plateaurepas"  />
                                                    <div class="textcheckradio">
                                                        <label>Verres</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__buffet"  />
                                                    <div class="textcheckradio">
                                                        <label>Couverts</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__plateaurepas"  />
                                                    <div class="textcheckradio">
                                                        <label>Autre</label>
                                                    </div>
                                                </div>
                                                </div>
                                        <input type="hidden" class="reponseDevis" name="reponses[]" value="Type de prestations recherch&eacute;es pour la vaisselle|" />
                                    </div>
                                    <div class="entree">
                                        <div class="libelle lch">Type de prestations recherch&eacute;es pour le stand / le salon <span class="required etoile"> * </span></div>
                                        <div class="grp_reponsechkx">
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__traiteurservice"  />
                                                    <div class="textcheckradio">
                                                        <label>Armoire</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__traiteursansservice"  />
                                                    <div class="textcheckradio">
                                                        <label>Salon</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__buffet"  />
                                                    <div class="textcheckradio">
                                                        <label>&Eacute;tag&egrave;re</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__plateaurepas"  />
                                                    <div class="textcheckradio">
                                                        <label>Stand</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value=""  />
                                                    <div class="textcheckradio">
                                                        <label>Fauteuil</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="checkradio">
                                                    <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value=""  />
                                                    <div class="textcheckradio">
                                                        <label>Autre</label>
                                                    </div>
                                                </div>
                                                </div>
                                        <input type="hidden" class="reponseDevis" name="reponses[]" value="Type de prestations recherch&eacute;es pour le stand / le salon|" />
                                    </div>
                                    <div class="entree">
                                        <div class="libelle">Indiquez toutes les informations compl&eacute;mentaires importantes pour que nous puissions traiter votre demande au mieux <span class="required etoile"> * </span></div>
                                        <div class="grp_reponse"><textarea name="009|scq_description_freevalue" class="required" id="009|scq_description_freevalue"></textarea></div>
                                        <input type="hidden" class="reponseDevis" name="reponses[]" value="Indiquez toutes les informations compl&eacute;mentaires importantes pour que nous puissions traiter votre demande au mieux|" />
                                    </div></div>
            <div id="customer"><div class="infos_client">
                                            <div class="infos_client_wt">
                                    
                                                
                                                
                                                <div class="titre_form_question1"><div class="bold_titre">Vos coordonn&eacute;es </div><div class="mandatory_i">* champ obligatoire</div></div>
                                                
                                                    <div id="civilite">
                                                        <div class="question_grp">
                                                            <div class="required question_t1">Civilit&eacute; <span class="required etoile" >*</span></div>
                                                            <select name="cus_title" class="question_t1" id="title_select">
                                                                <option value="monsieur">Monsieur</option>
                                                                <option value="madame">Madame</option>
                                                                <option value="mademoiselle">Mademoiselle</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="question_grp">
                                                            <div class="question_t1"><label for="cus_first_name" class="question_t1">Pr&eacute;nom <span class="etoile">*</span></label></div>
                                                            <input type="text" name="cus_first_name" value="" id="cus_first_name" class="required"/>
                                                        </div>
                                                        
                                                        <div class="question_grp">
                                                            <div class="question_t1"><label for="cus_last_name" class="question_t1">Nom <span class="etoile">*</span></label></div>
                                                            <input type="text"  name="cus_last_name" value="" id="cus_last_name" class="required"/>
                                                        </div>
                                                                                                            <div class="question_grp">
                                        <div class="question_t2"><label for="cus_tel">T&eacute;l&eacute;phone - obligatoire<span class="etoile">*</span></label></div>
                                        <input type="text" name="cus_tel" value=""  maxlength="18" id="cus_tel" class="required"/>
                                        </div>
                                     <div class="question_grp">
                                        <div class="question_t2"><label>Vous résidez en France métropolitaine<span class="etoile">*</span></label></div>
                                        <input type="radio" onclick="outdom(this.value);" name="cus_outdom" value="1" id="cus_outdom_yes" checked="checked"/><div class="label_cus_outdom">Oui</div>
                                        <input type="radio" onclick="outdom(this.value);" name="cus_outdom" value="0" id="cus_outdom_no" /><div class="label_cus_outdom">Non</div>
                                     </div>
                                     <div class="question_grp" id="out_pays">
                                        <div class="question_t2"<label>Pays de résidence<span class="etoile">*</span></label></div>
                                        <select class="required" disabled="disabled" name="cus_country" id="cus_country"><option value="">Choisir un pays</option></select>
                                     </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div id="localite">
                                                        <div class="question_grp">
                                                            <div class="question_t2"><label for="cus_postcode">Code postal <span class="etoile">*</span></label></div>
                                                            <input type="text" name="cus_postcode" value=""  maxlength="5" id="cus_postcode" class="required"/>
                                                        </div>
                                                        
                                                        <div class="question_grp">
                                                            <div class="question_t2"><label for="cus_town">Ville <span class="etoile">*</span></label></div>
                                                            <select name="cus_town" id="cus_town" class="required" disabled="disabled">
                                                            <option value="">Sélectionnez une ville</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div id="contact">
                                                        <div class="question_grp">
                                                            <div class="question_t3"><label for="cus_email">E-mail <span class="etoile">*</span></label></div>
                                                            <input type="text" name="cus_email"  value="" id="cus_email" class="required cus_email" />
                                                            <br />
                                                            <br />
                                                        </div>
                                                        
                                                        
                                                        <div class="question_grp">
                                                            <div class="question_t3"><label>T&eacute;l&eacute;phone secondaire (non obligatoire)</label></div>
                                                            <input type="text" name="cus_cell" value="" maxlength="15" id="tel2"/>
                                                        </div>
                                                        
                                                        <div class="question_grp">
                                                            <div class="question_t3"><label for="cus_availibility">Horaires pour vous joindre <span class="etoile">*</span></label></div>
                                                            <input type="text" name="cus_availibility" value=""  maxlength="200" id="cus_availibility" class="required"/>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div></div>
                    <div class="btns"><a href="#" class="link-1">Effacer</a><a href="#" class="link-1" onClick="document.getElementById('form').submit()">Envoyer</a></div>
                  </fieldset>  
                </form> 
            </div>
            <div class="clear"></div>
        </div>
    </section> 

    @stop
        <div class="clear"></div>
    </div>
</section> 

@stop