<form id="form" method="post" >
                        <h3>Type d'évènement <span class="required etoile"> * </span></h3>
                        @foreach($event_types as $value => $front)
                        <label>
                            {{ $front }}
                            <input type="radio" name="001|scq_work_type_monovalue" class="inputcheckradio required" value="work_type_monovalue_{{ $value }} "  />
                        </label>
                        @endforeach                        

                        <label>Date estimée de l'évènement <span class="required etoile" for="DateOfBook"> * </span></label>
                        <input type="text" name="DateOfBook" value="" class="required" />

                        <label class="libelle">Nombre de convives estimé <span class="required etoile"> * </span></label>
                        <select name="003|scq_delay_monovalue"  class="required defaultValueAct">
                            <option value="0" class="required" >Nombre de personnes</option>

                            @foreach($personnes as $value => $front)
                            <label>
                                <option value="delay_monovalue__{{ $value }}" class="required" > {{ $front }}</option>
                            </label>
                            @endforeach
                            
                        </select>
                        
                        <label>Où doit se passer l'évènement <span class="required etoile"> * </span></label>
                        <input type="text" name="cus_postcode_h" value=""  maxlength="5" id="cus_postcode_h" class="required" placeholder="Code postal"/>
                        
                        <select name="cus_town_h" id="cus_town_h" class="required" disabled="disabled">
                            <option value="">Sélectionnez une ville</option>
                        </select>

                        @foreach($rayon_km as $value => $front)
                        <label>
                            {{ $front }}
                            <input type="checkbox" name="005|scq_property_type_monovalue[]" class="inputcheckradio" value="property_type_monovalue__{{ $value }}"  />
                        </label>
                        @endforeach

                        <h4 class="libelle lch">Type de prestations recherchées pour du matériel <span class="required etoile"> * </span></h4>

                        @foreach($accessoires as $value => $front)
                        <label>{{ $front }}            
                            <input type="checkbox" name="006|scq_property_type_monovalue[]" class="inputcheckradio required" value="property_type_monovalue__{{ $value }}"  />
                        </label>
                        @endforeach    

                        <div class="entree">
                            <div class="libelle">Indiquez toutes les informations complémentaires importantes pour que nous puissions traiter votre demande au mieux <span class="required etoile"> * </span></div>
                            <div class="grp_reponse"><textarea name="009|scq_description_freevalue" class="required" id="009|scq_description_freevalue"></textarea></div>
                            <input type="hidden" class="reponseDevis" name="reponses[]" value="Indiquez toutes les informations complémentaires importantes pour que nous puissions traiter votre demande au mieux|" />
                        </div>
                        <div id="customer">
                            <div class="infos_client">
                                <div class="infos_client_wt">



                                    <p>Vos coordonnées </p>
                                    <p1>* champ obligatoire</p>


                                        <div id="civilite">
                                            <div class="question_grp">
                                                <div class="required question_t1">Civilité <span class="required etoile" >*</span></div>
                                                <select name="cus_title" class="question_t1" id="title_select">
                                                    @foreach($civilite as $value => $front)
                                                    <option value="$value">{{ $front }}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="question_grp">
                                                <div class="question_t1"><label for="cus_first_name" class="question_t1">Prénom <span class="etoile">*</span></label></div>
                                                <input type="text" name="cus_first_name" value="" id="cus_first_name" class="required"/>
                                            </div>

                                            <div class="question_grp">
                                                <div class="question_t1"><label for="cus_last_name" class="question_t1">Nom <span class="etoile">*</span></label></div>
                                                <input type="text"  name="cus_last_name" value="" id="cus_last_name" class="required"/>
                                            </div>
                                            <div class="question_grp">
                                                <div class="question_t2"><label for="cus_tel">Téléphone - obligatoire<span class="etoile">*</span></label></div>
                                                <input type="text" name="cus_tel" value=""  maxlength="18" id="cus_tel" class="required"/>
                                            </div>
                                            <div class="question_grp">
                                                <div class="question_t2"><label>Vous résidez en France métropolitaine<span class="etoile">*</span></label></div>
                                                <input type="radio" onclick="outdom(this.value);" name="cus_outdom" value="1" id="cus_outdom_yes" checked="checked"/>
                                                <div class="label_cus_outdom">Oui</div>
                                                <input type="radio" onclick="outdom(this.value);" name="cus_outdom" value="0" id="cus_outdom_no" />
                                                <div class="label_cus_outdom">Non</div>
                                            </div>
                                            <div class="question_grp" id="out_pays">
                                                <div class="question_t2"<label>Pays de résidence<span class="etoile">*</span></label></div>
                                                <select class="required" disabled="disabled" name="cus_country" id="cus_country"><option value="">Choisir un pays</option></select>
                                            </div>
                                        



                                        
                                         <div class="question_grp">
                                                <div class="question_t2"><label for="cus_postcode">Code postal <span class="etoile">*</span></label></div>
                                                <input type="text" name="cus_postcode" value=""  maxlength="5" id="cus_postcode" class="required"/>
                                            

                                                <div class="question_t2"><label for="cus_town">Ville <span class="etoile">*</span></label></div>
                                                <select name="cus_town" id="cus_town" class="required" disabled="disabled">
                                                    <option value="">Sélectionnez une ville</option>
                                                </select>
                                            
                                        </div>

                                            <div class="question_grp">
                                                <div class="question_t3"><label for="cus_email">E-mail <span class="etoile">*</span></label></div>
                                                <input type="text" name="cus_email"  value="" id="cus_email" class="required cus_email" />
                                                <br />
                                                <br />
                                            </div>


                                            <div class="question_grp">
                                                <div class="question_t3"><label>Téléphone secondaire (non obligatoire)</label></div>
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