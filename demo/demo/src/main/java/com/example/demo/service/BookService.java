package com.example.demo.service;

import com.example.demo.model.Book;
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
public class BookService {

    @Autowired
    private SessionFactory sessionFactory;

    public void setSessionFactory(SessionFactory sessionFactory) {
        this.sessionFactory = sessionFactory;
    }

    public int updateBook(Book book){
        sessionFactory.getCurrentSession().update(book);
        return book.getId();
    }

    public int createBook(Book book){
        sessionFactory.getCurrentSession().save(book);
        return book.getId();

    }

    public int deleteBook(Book book){
        sessionFactory.getCurrentSession().delete(book);
        return book.getId();
    }

    public List<Book> searchBookByName(String name){
        Criteria criteria = sessionFactory.getCurrentSession().createCriteria(Book.class);
        criteria.add(Restrictions.like("name",name, MatchMode.ANYWHERE));
        return criteria.list();
    }

}
