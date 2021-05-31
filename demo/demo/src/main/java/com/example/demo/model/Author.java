package com.example.demo.model;

import com.fasterxml.jackson.annotation.JsonIgnore;
import com.sun.istack.NotNull;
import org.hibernate.annotations.LazyCollection;
import org.hibernate.annotations.LazyCollectionOption;

import javax.persistence.*;
import java.util.List;

@Entity
@Table(name= "author")
public class Author {

    @Id
    @Column
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private int id;

    @Column
    @NotNull
    private String authorName;

    @Column
    @NotNull
    private String academicCredential;

    @ManyToOne
    @JoinColumn(name = "subLibraryId")
    @JsonIgnore
    @NotNull
    private SubLibrary subLibrary;

    @Column
    @LazyCollection(LazyCollectionOption.FALSE)
    @OneToMany(mappedBy="author",cascade= CascadeType.ALL)
    @NotNull
    private List<Book> books;


    public Author(int id, String authorName, String academicCredential, SubLibrary subLibrary, List<Book> books) {
        this.id = id;
        this.authorName = authorName;
        this.academicCredential = academicCredential;
        this.subLibrary = subLibrary;
        this.books = books;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getAuthorName() {
        return authorName;
    }

    public void setAuthorName(String authorName) {
        this.authorName = authorName;
    }

    public String getAcademicCredential() {
        return academicCredential;
    }

    public void setAcademicCredential(String academicCredential) {
        this.academicCredential = academicCredential;
    }

    public SubLibrary getLibrary() {
        return subLibrary;
    }

    public void setLibrary(SubLibrary subLibrary) {
        this.subLibrary = subLibrary;
    }

    public List<Book> getBooks() {
        return books;
    }

    public void setBooks(List<Book> books) {
        this.books = books;
    }
    public Author(){
    }

    @Override
    public String toString() {
        return "Author{" +
                "id=" + id +
                ", authorName='" + authorName + '\'' +
                ", academicCredential='" + academicCredential + '\'' +
                ", subLibrary=" + subLibrary +
                ", books=" + books +
                '}';
    }
}
