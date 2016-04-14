$ ->

  $body = $ 'body'
  $document = $ document

  # # CHECK HTML5 BROWSER
  # if 'querySelector' in document && 'localStorage' in window && 'addEventListener' in window
  #   $body.addClass 'br-new'
  # else
  #   $body.addClass 'br-old'

  class ValidMe
    constructor: ->
    
    init: ->
      @listeners()

    listeners: ->
      self = @
      $document.on 'submit', '.cf', (e) ->
        self.submitForm(e, this)
        
      $document.on 'keydown', '.cf input, .cf textarea', ->
        self.removeError(this)

      $document.on 'change', '.cf #file', ->
        self.uploadFile(this)

    submitForm: (e, form) ->
      e.preventDefault()

      submitBtn = $(form).find 'button[type="submit"]'

      if @validateForm(form) == false
        return false;

      submitBtn.attr('disabled', 'disabled')

      # str = form.serialize()
      
      # $.ajax {
      #   url: 'send/string'
      #   type: 'POST'
      #   data: str
      # }
      # .done (msg) ->
      #   if (msg == "Ok")
      #     result = $ '.msg-email-send'
      #     result.text 'Ваше сообщение отправлено.'
      #      .fadeIn(300)
      #      .delay(2000)
      #      .fadeOut(1000);
      #     form.find('input, textarea').val('').removeClass('has-success')
      #   else
      #     form.after(msg)
          
      # .always ->
      #    submitBtn.removeAttr('disabled')
    
    validateForm: (form) ->
      
      inputs = $(form).find 'input:not(.novalid), textarea:not(.novalid)'
      valid = true

      inputs.each (idx, el) ->
        input = $ el
        val = input.val()

        if val.length == 0
          input.addClass('has-error').removeClass('has-success')
          valid = false
          return
        else
          input.addClass('has-success').removeClass('has-error')
      
      return valid
    
    removeError: (inp) ->
      $(inp).removeClass 'has-error'
       
    uploadFile: (el) ->
      el = $(el)
      label = el.parent()
      text = el.siblings('.file-text')
      
      if el[0].files.length
        label.addClass('active')
        text.text('Attached file ...')
      else
        label.removeClass('active')
        text.text('Upload file')

  $('.cont-connect').magnificPopup
    type: 'ajax'
    callbacks:
      open: ->
        validation = new ValidMe
        validation.init()
       
        # popupContact = new ui.Actor '.contact-form'
        # contMove = new ui.Tween {
        #   values:
        #     x: 100
        # }
        # popupContact.start contMove