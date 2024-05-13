/*!
 * Toastr v1.0
 *
 * Copyright Wisp X
 * Released under the MIT license
 *
 * Date: 2018-08-20 16:50
 * Link: https://gitee.com/wispx
 */
$.extend({ toastr: { options: { time: 3000, position: 'top-right', size: '', callback: function () { } }, config: function (options) { Object.keys(options).forEach(function (key) { this.options[key] = options[key] }.bind(this)) }, container: function (position) { position = position ? position : this.options.position; var container = $('body .toastr-container'); if (!container.hasClass(position)) { $('body').append('<div class="toastr-container ' + position + '"><ul></ul></div>') } return $('body .toastr-container.' + position) }, create: function (type, msg, options) { var self = this; msg = msg || 'null'; options = options || {}; var time = options.time ? options.time : this.options.time, position = options.position ? options.position : this.options.position, size = options.size ? options.size : this.options.size, callback = options.callback ? options.callback : this.options.callback; var fades = { 'top-left': { fadeIn: 'left', fadeOut: 'left' }, 'top-center': { fadeIn: 'top', fadeOut: 'bottom' }, 'top-right': { fadeIn: 'right', fadeOut: 'right' }, 'right-bottom': { fadeIn: 'right', fadeOut: 'right' }, 'bottom-center': { fadeIn: 'top', fadeOut: 'bottom' }, 'left-bottom': { fadeIn: 'left', fadeOut: 'left' } }, id = 'toastr-' + new Date().getTime(); this.container(position).find('> ul').prepend('<li class="' + size + ' fade-in-' + fades[position].fadeIn + ' ' + id + ' toastr-' + type + '">' + msg + '</li>'); var li = this.container(position).find('.' + id), fadeOut = 'fade-out-' + fades[position].fadeOut, timer = setTimeout(function () { clearTimeout(timer); li.unbind('click'); self.close(li, fadeOut, callback) }, time); li.click(function () { clearTimeout(timer); self.close(li, fadeOut, callback) }) }, close: function (li, fadeOut, callback) { li.addClass(fadeOut); setTimeout(function () { li.remove() }, 300); callback(); setTimeout(function () { $('body .toastr-container').each(function (i, v) { if ($(v).find('ul li').length <= 0) { $(v).remove() } }) }, 500) }, clear: function () { var container = $('body .toastr-container'); container.length >= 0 && container.fadeOut(1000); setTimeout(function () { container.remove() }, 2000) }, success: function (msg, options) { this.create('success', msg, options) }, info: function (msg, options) { this.create('info', msg, options) }, warning: function (msg, options) { this.create('warning', msg, options) }, error: function (msg, options) { this.create('error', msg, options) } } });