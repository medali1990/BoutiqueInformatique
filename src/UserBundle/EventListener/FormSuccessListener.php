<?php
 
// src/FBN/UserBundle/EventListener/FormSuccessListener.php
 
namespace UserBundle\EventListener;
 
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
 
/**
 * Listener responsible to change the redirection when a form is successfully filled
 */
class FormSuccessListener implements EventSubscriberInterface
{
    private $router;
 
    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }
 
    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_SUCCESS => 'onFormSuccess',    // marche
            FOSUserEvents::CHANGE_PASSWORD_SUCCESS => 'onFormSuccess', // Marche
            FOSUserEvents::PROFILE_EDIT_SUCCESS => 'onFormSuccess',  // Marche                   
        );
    }
 
    public function onFormSuccess(FormEvent $event)
    {
        $url = $this->router->generate('back_office_homepage');
 
        $event->setResponse(new RedirectResponse($url));
    }
}