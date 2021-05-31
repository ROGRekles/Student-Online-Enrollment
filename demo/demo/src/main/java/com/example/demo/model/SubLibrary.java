package com.example.demo.model;

import com.sun.istack.NotNull;

import javax.persistence.*;

@Entity
@Table(name= "library")
public class SubLibrary {

    @Id
    @Column
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private int id;

    @Column
    @NotNull
    private String subject;

    public SubLibrary(int id, String subject) {
        this.id = id;
        this.subject = subject;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getSubject() {
        return subject;
    }

    public void setSubject(String subject) {
        this.subject = subject;
    }
    public SubLibrary(){

    }

    @Override
    public String toString() {
        return "SubLibrary{" +
                "id=" + id +
                ", subject='" + subject + '\'' +
                '}';
    }
}
