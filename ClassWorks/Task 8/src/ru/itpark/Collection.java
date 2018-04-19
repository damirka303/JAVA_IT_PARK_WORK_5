package ru.itpark;

public interface Collection {
  void add(Object element);
  boolean contains(Object element);
  boolean delete (Object element);
  int size();
}
