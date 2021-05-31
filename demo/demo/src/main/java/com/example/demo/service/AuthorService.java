package com.example.demo.service;

import com.example.demo.model.Author;
import org.hibernate.Criteria;
import org.hibernate.SessionFactory;
import org.hibernate.criterion.MatchMode;
import org.hibernate.criterion.Restrictions;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;

@Transactional
@Service
public class AuthorService {

    @Autowired
    private SessionFactory sessionFactory;

    public void setSessionFactory(SessionFactory sessionFactory) {
        this.sessionFactory = sessionFactory;
    }

    public int updateAuthor(Author author){
        sessionFactory.getCurrentSession().update(author);
        return author.getId();
    }

    public int createAuthor(Author author){
        sessionFactory.getCurrentSession().save(author);
        return author.getId();

    }

    public int deleteAuthor(Author author){
        sessionFactory.getCurrentSession().delete(author);
        return author.getId();
    }

    public List<Author> searchAuthorByName(String authorName){
        Criteria criteria = sessionFactory.getCurrentSession().createCriteria(Author.class);
        criteria.add(Restrictions.like("authorName",authorName, MatchMode.ANYWHERE));
        return criteria.list();
    }

    public List<Author> searchAuthorByCredential(String credential){
        Criteria criteria = sessionFactory.getCurrentSession().createCriteria(Author.class);
        criteria.add(Restrictions.like("academicCredential",credential, MatchMode.ANYWHERE));
        return criteria.list();
    }
}
