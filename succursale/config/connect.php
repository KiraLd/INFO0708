<?php
	$util=$_POST["util"];
	$pass=$_POST["pass"];
	$ok=true;
	if($util=='')
	{
		echo '<div class="echo">Vous devez remplir l\'identifiant !<br /></div>';
		$ok=false;
	}
	if($pass=='')
	{
		echo '<div class="echo">Vous devez remplir le mot de passe !<br /></div>';
		$ok=false;
	}
	if($util=="util" && $pass=="util")
	{
		$ok=false;
		echo '<div class="echo">Vos identifiants et mot de passe sont incorrect.</div>';
	}
	if($ok==false)
	{
		echo '<div class="echo"><a href="../index.php">Retour a la page d\'identification.</a></div>';
	}
	else
	{
		session_start();
		require('connexion.php');
		if($co)
		{
			$req = 'Select * from gestionnaire where login=\''.$util.'\' and mdp=\''.$pass.'\'';
			$res = $co->query($req);
			$tab = $res->fetch();
			if($tab!=null)
			{
				$_SESSION['connect']=true;
				$_SESSION['id']=$tab[0];
				$_SESSION['login']=$util;
				$_SESSION['mdp']=$pass;
				$_SESSION['suc']=$tab[1];
				$_SESSION['grade']='gestionnaire';
				header('Location: ../gestion1.php');
			}
			else
			{
				$req = 'Select * from formateur where login=\''.$util.'\' and mdp=\''.$pass.'\'';
				$res = $co->query($req);
				$tab = $res->fetch();
				if($tab[0]!=null)
				{
					$_SESSION['connect']=true;
					$_SESSION['id']=$tab[0];
					$_SESSION['login']=$util;
					$_SESSION['pass']=$pass;
					$_SESSION['grade']='formateur';
					header('Location: ../formateur1.php');
				}
				else
				{
					header('Location: ../index.php');
				}
			}
		}
		else
		{
			echo '<div class="echo">Vos identifiants et mot de passe sont incorrect. <br /><br /> <a href="../index.php">Retour a la page d\'identification.</a></div>';
		}
	}
	unset($co);
?>