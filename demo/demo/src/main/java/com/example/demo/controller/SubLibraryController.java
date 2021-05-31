package com.example.demo.controller;

import com.example.demo.model.SubLibrary;
import com.example.demo.service.SubLibraryService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
public class SubLibraryController {
    @Autowired
    private SubLibraryService subLibraryService;

    @RequestMapping(path="/subLibrary", method= RequestMethod.POST)
    public int createSubLibrary(@RequestBody SubLibrary subLibrary){
        return subLibraryService.createSubLibrary(subLibrary);
    }

    @RequestMapping(path="/subLibrary", method= RequestMethod.PUT)
    public int updateSubLibrary(@RequestBody SubLibrary subLibrary){
        return subLibraryService.updateSubLibrary(subLibrary);
    }

    @RequestMapping(value="/subLibrary/subject/{subject}", method= RequestMethod.GET)
    public List<SubLibrary> searchSubLibraryBySubject(@PathVariable("subject")String subject){
        return subLibraryService.searchSubLibraryBySubject(subject);
    }
}
