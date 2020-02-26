<?php

namespace App\Controller;

use App\Entity\CloudFamilleCompte;
use App\Entity\MapPays;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class ConnexionController extends AbstractController
{
    /**
     * Permet de se connecter
     * @Route("/", name="login")
     * @return Response
     * @throws \Exception
     */
    public function login(AuthenticationUtils $utils, UserPasswordEncoderInterface $encoder)
    {
        $error = $utils->getLastAuthenticationError();
        //dump($error);
        $username = $utils->getLastUsername();

        /*$repoPays = $this->getDoctrine()->getRepository(MapPays::class);
        $mapPays = $repoPays->find(218);
        $repoStates = $this->getDoctrine()->getRepository(MapPays::class);
        $mapStates = $repoStates->find(218);
        $repoVille = $this->getDoctrine()->getRepository(MapPays::class);
        $mapVille = $repoVille->find(218);

        $rand = random_int(100, 1000);
        $code = "CODECP$rand";
        $cloudFamilleCompte = new CloudFamilleCompte();
        $password = $encoder->encodePassword($cloudFamilleCompte, $cloudFamilleCompte->getCleAccesCloudFamilleCompte());
        $cloudFamilleCompte->setDesignationCloudFamilleCompte('TOGO PRO SYSTEMMS')
            ->setSigleCloudFamilleCompte('TPS')
            ->setLogoCloudFamilleCompte(null)
            ->setCode($code)
            ->setEmailCloudFamilleCompte('contact@tgprosystems.com')
            ->setTelephoneCloudFamilleCompte('(+228) 90 32 41 47 / 22 44 31 69')
            ->setCodeAccesCloudFamilleCompte('gobi')
            ->setCleAccesCloudFamilleCompte($password)
            ->setDescriptionCloudFamilleCompte(null)
            ->setAdresseCloudFamilleCompte('B.P. 30546 \n 33, rue Gakli \n Lomé - Djidjolé \n 200m de la pharmacie de Djidjolé')
            ->setPays($mapPays)
            ->setStates($mapStates)
            ->setVille($mapVille)
            ->setCloudTypeCompte(null);*/

        return $this->render('connexion/login.html.twig', [
            'hasError' => $error !== null,
            'username' => $username
        ]);
    }

    /*
     * Permet de se déconnecter
     *
     * @return void
     * @Route("/logout",name="logout")
     * */
    public function logout()
    {
        //rien
    }
}
