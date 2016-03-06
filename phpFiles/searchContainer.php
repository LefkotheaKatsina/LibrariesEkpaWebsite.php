<html>
    <div id="searchContainer">
                <ul class="nav nav-tabs navSearch">
                  <li class="active"><a data-toggle="tab" href="#searchMaterial">Αναζήτηση στο Υλικό</a></li>
                  <li><a data-toggle="tab" href="#searchLibraries">Αναζήτηση στις Βιβλιοθήκες</a></li>
                </ul>
                <div class="tab-content">
                    <div id="searchMaterial" class="tab-pane active searchTextBox borderDesign2">
                        <div id="searchHeader">Αναζήτησε Βιβλία, Άρθρα, Εργασίες κ.τ.λ</div>
                        <form method ="get" class="form" action="searchResults.php" role="search" name="simple">
                            <div class="input-group input-group-class pull-right">
                                    <input type="text" class="form-control" placeholder="Search" name="searchTermComp" id="srch-term">
                                    <div class="input-group-btn">
                                       <input name="simple" class="btn btn-default" type="submit" value="Αναζήτηση">
                                    </div>
                                </div>
                                <div class="btn-group btn-groupClass">
                                    <select name="fieldTermComp" class="selectFieldSearch">
                                        <option>Όλα Τα Πεδία</option>
                                        <option>Συγγραφέας</option>
                                        <option>Τίτλος</option>
                                        <option>Βιβλιοθήκη</option>
                                    </select>
                                </div>
                                
                            </form>
                        <ul id="SearchLinks" class="ulDesignBlue">
                            <li><a class="aDesignBlue" href="searchResults.php">Σύνθετη Aναζήτηση</a></li>
                            <!--<li><a class="aDesignBlue" href="#">Ψηφιακό Υλικό</a></li>-->
                            <li><a class="aDesignBlue" href="listEdit.php">Η Λίστα μου()</a></li>
                        </ul>
                    </div>
                    <div id="searchLibraries" class="tab-pane searchTextBox borderDesign2">
                        <div id="searchHeader">Αναζήτησε κάποια Βιβλιοθήκη του ΕΚΠΑ</div>
                        <form method ="get" class="form" action="searchLibraryResults.php" role="search" name="Lib">
                            <div class="input-group input-group-class pull-right">
                                    <input type="text" class="form-control" placeholder="Search" name="searchTermLib" id="srch-term">
                                    <div class="input-group-btn">
                                       <input name="Lib" class="btn btn-default" type="submit" value="Αναζήτηση">
                                    </div>
                                </div>
                                <div class="btn-group btn-groupClass">
                                    <select name="fieldTermLib" class="selectFieldSearch">
                                        <option>Όλα Τα Πεδία</option>
                                        <option>Όνομα</option>
                                        <option>Διεύθυνση</option>
                                        <option>Τμήμα</option>
                                    </select>
                                </div>
                                
                        </form>
                    </div>
                </div>
            </div>
</html>