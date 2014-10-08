<?php
/**
 * Description of Response
 *
 * @author nfredes
 */
class Respuesta
{
    private $error;
    private $content;
    private $message;
    private $exception;
    private $paginator_next;
    private $paginator_prev;
    
    public function __construct (
            $error = '', $content = null,
            $message = '', $exception = '',
            $paginator_next = '', $paginator_prev = '')
    {
        $this->setError($error);
        $this->setContent($content);
        $this->setMessage($message);
        $this->setException($exception);
        $this->setPaginator_next($paginator_next);
        $this->setPaginator_prev($paginator_prev);
    }
    
    public function getError () {return $this->error;}
    public function getContent () {return $this->content;}
    public function getMessage () {return $this->message;}
    public function getException () {return $this->exception;}
    public function getPaginator_next () {return $this->paginator_next;}
    public function getPaginator_prev () {return $this->paginator_prev;}
    
    public function setError ($error) {$this->error = $error;}
    public function setContent ($content) {$this->content = $content;}
    public function setMessage ($message) {$this->message = $message;}
    public function setException ($exception) {$this->exception = $exception;}
    public function setPaginator_next ($paginator_next) {$this->paginator_next = $paginator_next;}
    public function setPaginator_prev ($paginator_prev) {$this->paginator_prev = $paginator_prev;}
    
    public function toArray(){
        return array(
            'error' => $this->getError(),
            'content' => $this->getContent(),
            'message' => $this->getMessage(),
            'exception' => $this->getException(),
            'paginator_next' => $this->getPaginator_next(),
            'paginator_prev' => $this->getPaginator_prev()
        );
    }
}
