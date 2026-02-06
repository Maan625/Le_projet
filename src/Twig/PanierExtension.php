<?php

namespace App\Twig;

use App\Repository\CommandeRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PanierExtension extends AbstractExtension
{
    public function __construct(
        private RequestStack $requestStack,
        private TokenStorageInterface $tokenStorage,
        private CommandeRepository $commandeRepo
    ) {}

    public function getFunctions(): array
    {
        return [
            new TwigFunction('panier_count', [$this, 'getPanierCount']),
        ];
    }

    public function getPanierCount(): int
    {
        $request = $this->requestStack->getCurrentRequest();
        if (!$request) return 0;

        $session = $request->getSession();

        $token = $this->tokenStorage->getToken();
        $user  = $token ? $token->getUser() : null;

        // ✅ إذا المستخدم مسجل: نجيب العدد من DB (commande en_attente)
        if ($user && is_object($user)) {
            $commande = $this->commandeRepo->findOneBy([
                'user' => $user,
                'statut' => 'en_attente',
            ]);

            if (!$commande) return 0;

            // اسم العلاقة عندك: getCommandeItems()
            return $commande->getCommandeItems()->count();
        }

        // ✅ زائر: من session
        $panier = $session->get('panier', []);
        return array_sum($panier);
    }
}