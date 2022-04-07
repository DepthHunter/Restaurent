package kz.narxoz.canvas.repository;

import kz.narxoz.canvas.model.Book;
import org.springframework.data.jpa.repository.JpaRepository;

public interface BookRepository extends JpaRepository<Book, Long> {
}