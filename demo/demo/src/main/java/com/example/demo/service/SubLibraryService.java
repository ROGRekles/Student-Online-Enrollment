package com.example.demo.service;

import com.example.demo.model.SubLibrary;
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
public class SubLibraryService {

    @Autowired
    private SessionFactory sessionFactory;

    public void setSessionFactory(SessionFactory sessionFactory) {
        this.sessionFactory = sessionFactory;
    }

    public int updateSubLibrary(SubLibrary subLibrary){
        sessionFactory.getCurrentSession().update(subLibrary);
        return subLibrary.getId();
    }

    public int createSubLibrary(SubLibrary subLibrary){
        sessionFactory.getCurrentSession().save(subLibrary);
        return subLibrary.getId();

    }

    public List<SubLibrary> searchSubLibraryBySubject(String subject){
        Criteria criteria = sessionFactory.getCurrentSession().createCriteria(SubLibrary.class);
        criteria.add(Restrictions.like("subject",subject, MatchMode.ANYWHERE));
        return criteria.list();
    }
}
