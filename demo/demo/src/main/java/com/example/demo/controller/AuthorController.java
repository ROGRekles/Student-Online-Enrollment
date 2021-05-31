package com.example.demo.controller;

import com.example.demo.service.AuthorService;
import com.example.demo.model.Author;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
public class AuthorController {
    @Autowired
    private AuthorService authorService;

    @RequestMapping(path="/author", method= RequestMethod.POST)
    public int createAuthor(@RequestBody Author author){
        return authorService.createAuthor(author);
    }

    @RequestMapping(path="/author", method= RequestMethod.PUT)
    public int updateAuthor(@RequestBody Author author){
        return authorService.updateAuthor(author);
    }

    @RequestMapping(path="/author", method= RequestMethod.DELETE)
    public int deleteAuthor(@RequestBody Author author){
        return authorService.deleteAuthor(author);
    }

    @RequestMapping(value="/author/{authorName}", method= RequestMethod.GET)
    public List<Author> searchAuthorByName(@PathVariable("authorName")String authorName){
        return authorService.searchAuthorByName(authorName);
    }

    @RequestMapping(value="/author/{academicCredential}", method= RequestMethod.GET)
    public List<Author> searchAuthorByCredential(@PathVariable("academicCredential")String credential){
        return authorService.searchAuthorByCredential(credential);
    }
}
