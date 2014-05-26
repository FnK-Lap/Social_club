<header>
	<div id='title-logo-center'>
		Social<span class='title-color'>Club</span>
	</div>
</header>
	<div id='bloc_login'>
	    <div class='bloc_logincontent'>
	        <div class='bloc_headercontent'>
	            <h1 class="text-login">Inscription</h1>
	        </div>
	        <form class='form_login' action="index.php?action=register&amp;token={$smarty.get.token}" method="post"><br>
	            <table>
	                <tr>
	                    <td>
	                        <div class='bloc_bodycontent'>
	                            <div class='bloc_bodycentercontent'>
	                                <div class='bloc_bodygroup'>
	                                    <input class="body_bouton" type="text" name='nom' id='nom' placeholder="Nom" value='{$smarty.post.nom|default}'>
	                                    <span class="error-message"></span>
	                                </div>
	                            </div>
	                        </div>
	                    </td>
	                <tr/>
	                <tr>
	                    <td>
	                        <div class='bloc_bodycontent'>
	                            <div class='bloc_bodycentercontent'>
	                                <div class='bloc_bodygroup'>
	                                    <input class="body_bouton" type="text" name='prenom' id='prenom' placeholder="Prenom" value='{$smarty.post.prenom|default}'>
	                                    <span class="error-message"></span>
	                                </div>
	                            </div>
	                        </div>
	                    </td>
	                <tr/>
	                <tr>
	                    <td>
	                        <div class='bloc_bodycontent'>
	                            <div class='bloc_bodycentercontent'>
	                                <div class='bloc_bodygroup'>
	                                    <input class="body_bouton" type="email" name='email' id='email' placeholder="Email" value='{$smarty.post.email|default}'>
	                                    <span class="error-message"></span>
	                                </div>
	                            </div>
	                        </div>
	                    </td>
	                <tr/>
	                <tr>
	                    <td>
	                        <div class='bloc_bodycontent'>
	                            <div class='bloc_bodycentercontent'>
	                                <div class='bloc_bodygroup'>
	                                    <input class="body_bouton" type="date" name='date' id='date' placeholder="1995-11-18" value='{$smarty.post.date|default}'>
	                                    <span class="error-message"></span>
	                                </div>
	                            </div>
	                        </div>
	                    </td>
	                <tr/>
	                <tr>
	                    <td>
	                        <div class='bloc_bodycontent'>
	                            <div class='bloc_bodycentercontent'>
	                                <div class='bloc_bodygroup'>
	                                    <input class="body_bouton" type="password" name='pass' id='password' placeholder="Password">
	                                    <span class="error-message"></span>
	                                </div>
	                            </div>
	                        </div>
	                    </td>
	                </tr>
	                 <tr>
	                    <td>
	                        <div class='bloc_bodycontent'>
	                            <div class='bloc_bodycentercontent'>
	                                <div class='bloc_bodygroup'>
	                                    <input class="body_bouton" type="password" name='verif_pass' id='verif_pass' placeholder="Verifaction Pass">
	                                    <span class="error-message"></span>
	                                </div>
	                            </div>
	                        </div>
	                    </td>
	                </tr>
	            </table>
                <div class='bloc_bodycontent'>
                    <div class='bloc_bodycentercontent'>
                        <div class='bloc_bodygroup'>
                            <input type='submit' class="btn_body_bouton"></input>
                        </div>
                    </div>
                </div>
	        </form>
	    </div>
	</div>