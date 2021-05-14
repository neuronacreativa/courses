package org.nc.solid.domain.shared;

public interface DomainEvent<T> {
    boolean sameEventAs(T other);
}
