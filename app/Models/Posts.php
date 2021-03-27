<?php

class Post {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function lerPosts(){
        $this->db->query("SELECT *,
        posts.id as postId,
        posts.criado_em as postDataCadastro,
        usuarios.id as usuarioId, 
        usuarios.criado_em as usuarioDataCadastro
        FROM posts
        INNER JOIN usuarios ON 
        posts.usuario_id = usuarios.id
        ORDER BY posts.id DESC
        ");


        return $this->db->resultados();
    }

    public function armazenar($dados){
        $this->db->query("INSERT INTO posts(usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");
        
        $this->db->bind("usuario_id",$dados['usuario_id']);
        $this->db->bind("titulo",$dados['titulo']);
        $this->db->bind("texto",$dados['texto']);
        

        if($this->db->executa()):
            return true;
        else:   
            return false;
        endif;    
    }

    public function atualizar($dados){
        $this->db->query("UPDATE posts SET titulo = :titulo, texto = :texto WHERE id = :id");
        
        $this->db->bind("usuario_id",$dados['usuario_id']);
        $this->db->bind("titulo",$dados['titulo']);
        $this->db->bind("texto",$dados['texto']);
        

        if($this->db->executa()):
            return true;
        else:   
            return false;
        endif;    
    }


    public function lerPostPorId($id){
        $this->db->query("SELECT * FROM posts WHERE titulo = :id");
        $this->db->bind('id', $id);

        return $this->db->resultado();
    }

    public function destruir($id){
        $this->db->query("DELETE FROM posts WHERE id = :id");
        $this->db->bind('id', $id);

        if($this->db->executa()):
            return true;
        else:   
            return false;
        endif; 
    }


}