package com.example.demo.controller;

import com.example.demo.model.Book;
import com.example.demo.service.BookService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
public class BookController {
    @Autowired
    private BookService bookService;

    @RequestMapping(path="/book", method= RequestMethod.POST)
    public int createBook(@RequestBody Book book){
        return bookService.createBook(book);
    }

    @RequestMapping(path="/book", method= RequestMethod.PUT)
    public int updateBook(@RequestBody Book book){
        return bookService.updateBook(book);
    }

    @RequestMapping(path="/book", method= RequestMethod.DELETE)
    public int deleteBook(@RequestBody Book book){
        return bookService.deleteBook(book);
    }

    @RequestMapping(value="/book/{authorName}", method= RequestMethod.GET)
    public List<Book> searchBookByName(@PathVariable("authorName")String authorName){
        return bookService.searchBookByName(authorName);
    }

}
