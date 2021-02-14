package org.nc.posts.infrastructure.controllers.exception;

import org.nc.posts.domain.dto.response.PostResponse;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.ControllerAdvice;
import org.springframework.web.bind.annotation.ExceptionHandler;
import org.springframework.web.servlet.mvc.method.annotation.ResponseEntityExceptionHandler;

@ControllerAdvice
public class PostsControllerExceptionAdvice extends ResponseEntityExceptionHandler {
	
    @ExceptionHandler({Exception.class})
    public ResponseEntity<PostResponse> handleRestException(Exception exc) {
    	
    	return ResponseEntity.status(HttpStatus.BAD_REQUEST).body(null);
    }

}
