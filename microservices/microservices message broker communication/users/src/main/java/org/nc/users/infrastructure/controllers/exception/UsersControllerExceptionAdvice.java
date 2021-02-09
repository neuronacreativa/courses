package org.nc.users.infrastructure.controllers.exception;

import org.nc.users.domain.dto.response.UserResponse;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.ControllerAdvice;
import org.springframework.web.bind.annotation.ExceptionHandler;
import org.springframework.web.servlet.mvc.method.annotation.ResponseEntityExceptionHandler;

@ControllerAdvice
public class UsersControllerExceptionAdvice extends ResponseEntityExceptionHandler {
	
    @ExceptionHandler({Exception.class})
    public ResponseEntity<UserResponse> handleRestException(Exception exc) {
    	
    	return ResponseEntity.status(HttpStatus.BAD_REQUEST).body(null);
    }

}
